<?php

namespace App\Http\Controllers\Algorithm;

use App\Http\Controllers\Controller;
use App\Models\Algorithm\NaiveBayes;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NaiveBayesController extends Controller
{

    protected function runFormula(array $mutu, array $val, int $totalData, int $totalMutuFromData): float
    {
        $moistureContentClass = match (true) {
            ($val['moisture_content'] >= 80 && $val['moisture_content'] <= 85)  => 1,
            ($val['moisture_content'] >= 75 && $val['moisture_content'] <= 80)  => 2,
            default => 0,
        };

        $diameterClass = match (true) {
            ($val['diameter'] > 2.5)  => 1,
            ($val['diameter'] >= 1.5 && $val['diameter'] <= 2.5)  => 2,
            default => 0,
        };

        return ($mutu['uniform_'] / $totalMutuFromData) *
            ($mutu['hst_' . (($val['hst'] > 59) ? '1' : '2')] / $totalMutuFromData) *
            ($mutu['texture_' . ((strtolower($val['texture']) === 'keras') ? '1' : '2')] / $totalMutuFromData) *
            ($mutu['is_dry_'] / $totalMutuFromData) *
            ($mutu['is_dirty_'] / $totalMutuFromData) *
            ($mutu['is_rotting_' . ((strtolower($val['is_rotting']) === 'busuk') ? '1' : '2')] / $totalMutuFromData) *
            ($mutu['is_damage_' . ((strtolower($val['is_damage']) === 'rusak') ? '1' : '2')] / $totalMutuFromData) *

            (($moistureContentClass === 0 ? 0 : ($mutu['moisture_content_' . $moistureContentClass] / $totalMutuFromData))) *
            (($diameterClass === 0 ? 0 : ($mutu['diameter_' . $diameterClass] / $totalMutuFromData))) *
            ($totalMutuFromData / $totalData);
    }

    protected function analyze($val)
    {
        $naiveData = NaiveBayes::get()->makeHidden(['updated_at', 'created_at'])->collect();

        $varX = collect([
            ['x' => 'uniform', 'value' => 'seragam', 'opr' => '='],
            ['x' => 'hst', 'value' => '59', 'opr' => '>', 'class' => 1],
            ['x' => 'hst', 'value' => '60', 'opr' => '<', 'class' => 2],
            ['x' => 'texture', 'value' => 'keras', 'opr' => '=', 'class' => 1],
            ['x' => 'texture', 'value' => 'cukup keras', 'opr' => '=', 'class' => 2],
            ['x' => 'is_dry', 'value' => 'simpan kering', 'opr' => '='],
            ['x' => 'is_dirty', 'value' => 'tidak ada', 'opr' => '='],
            ['x' => 'is_rotting', 'value' => 'busuk', 'opr' => '=', 'class' => 1],
            ['x' => 'is_rotting', 'value' => 'tidak busuk', 'opr' => '=', 'class' => 2],
            ['x' => 'is_damage', 'value' => 'rusak', 'opr' => '=', 'class' => 1],
            ['x' => 'is_damage', 'value' => 'tidak rusak', 'opr' => '=', 'class' => 2],
            ['x' => 'moisture_content', 'value' => [80, 85], 'opr' => 'between', 'class' => 1],
            ['x' => 'moisture_content', 'value' => [75, 80], 'opr' => 'between', 'class' => 2],
            ['x' => 'diameter', 'value' => 2.5, 'opr' => '>', 'class' => 1],
            ['x' => 'diameter', 'value' => [1.5, 2.5], 'opr' => 'between', 'class' => 2],
        ]);

        // Mutu I
        $mutu1 = $varX->mapWithKeys(function ($itemX) use ($naiveData) {
            if ($itemX['opr'] == 'between') {
                return [
                    $itemX['x'] . '_' . ($itemX['class'] ?? '') => $naiveData->where('mutu_class', '=', 1)->whereBetween($itemX['x'], $itemX['value'])->count()
                ];
            }
            return [
                $itemX['x'] . '_' . ($itemX['class'] ?? '') => $naiveData->where('mutu_class', '=', 1)->where($itemX['x'], $itemX['opr'], $itemX['value'])->count()
            ];
        })->toArray();

        // Mutu II
        $mutu2 = $varX->mapWithKeys(function ($itemX) use ($naiveData) {
            if ($itemX['opr'] == 'between') {
                return [
                    $itemX['x'] . '_' . ($itemX['class'] ?? '') => $naiveData->where('mutu_class', '=', 2)->whereBetween($itemX['x'], $itemX['value'])->count()
                ];
            }
            return [
                $itemX['x'] . '_' . ($itemX['class'] ?? '') => $naiveData->where('mutu_class', '=', 2)->where($itemX['x'], $itemX['opr'], $itemX['value'])->count()
            ];
        })->toArray();

        // perhitungan
        $totalData = $naiveData->count();



        // new sample mutu 1
        $totalMutu1 = $naiveData->where('mutu_class', '=', 1)->count();
        $nsM1 = $this->runFormula($mutu1, $val, $totalData, $totalMutu1);

        // new sample mutu 2
        $totalMutu2 = $naiveData->where('mutu_class', '=', 1)->count();
        $nsM2 = $this->runFormula($mutu2, $val, $totalData, $totalMutu2);


        return ($nsM1 > $nsM2) ? 1 : 2;
    }

    public function submit(Request $request)
    {
        $request->request->set('diameter', floatval(Str::remove(",", Str::replaceFirst(',', '.', $request->diameter))));
        $request->request->set('moisture_content', floatval(Str::remove(",", Str::replaceFirst(',', '.', $request->moisture_content))));
        $request->request->set('hst', floatval(Str::remove(",", Str::replaceFirst(',', '.', $request->hst))));



        $request->validate([
            'hst' => ['required'],
            'moisture_content' => ['required'],
            'diameter' => ['required'],
            'is_rotting' => ['required', 'in:busuk,tidak busuk'],
        ], [], [
            'hst' => 'Hari Setelah Tanam',
            'texture' => 'Kekerasan',
            'is_rotting' => 'Kebusukan',
            'is_damage' => 'Kerusakan',
            'moisture_content' => 'Jumlah Kadar Air',
            'diameter' => 'Ukuran Diameter',
        ]);

        $mutuClass = $this->analyze($request->all());

        NaiveBayes::create([
            'uniform' => 'seragam',
            'hst' => $request->hst,
            'texture' => $request->texture,
            'is_dry' => 'simpan kering',
            'is_dirty' => 'tidak ada',
            'is_rotting' => $request->is_rotting,
            'is_damage' => $request->is_damage,
            'moisture_content' => $request->moisture_content,
            'diameter' => $request->diameter,
            'mutu_class' => $mutuClass,
        ]);

        return back()->with('success', 'Bawang Merahmu masuk dalam kategori Mutu ' . ($mutuClass === 1 ? 'I' : 'II'));
    }
}
