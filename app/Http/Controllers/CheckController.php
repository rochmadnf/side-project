<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckController extends Controller
{
    public function calculate(Request $request)
    {

        $dataMustOne = [
            "ketuaan" => ((int) $request->ketuaan < 60) ? 0 : 1,
            "kekerasan" => (int) $request->kekerasan,
        ];

        $dataMustZero = [
            "kebusukan" => (int) $request->kebusukan,
            "kerusakan" => (int) $request->kerusakan,
        ];

        // kadar air
        if ((float) $request->kadar_air > 80 && (float) $request->kadar_air <= 85) {
            $dataMustOne["kadar_air"] = 1;
        } else {
            $dataMustOne["kadar_air"] = 0;
        }

        // diameter
        if ((float) $request->diameter > 2.5) {
            $dataMustOne["diameter"] = 1;
        } else if ((float) $request->diameter >= 1.5 && (float) $request->diameter <= 2.5) {
            $dataMustOne["diameter"] = 0.5;
        } else {
            $dataMustOne["diameter"] = 0;
        }

        $checkingOne = array_filter($dataMustOne, fn ($prop) => $prop >= 1);
        $checkingZero = array_filter($dataMustZero, fn ($prop) => $prop >= 0);

        if (count($checkingOne) === 4 && count($checkingZero) === 2) {
            $res = [
                "message" => "Bawang Merah Bermutu 1"
            ];
        } else {
            $res = [
                "message" => "Bawang Merah Bermutu 2"
            ];
        }

        return response()->json($res, 200);
    }
}
