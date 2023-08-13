<?php

namespace App\Http\Controllers;

class StandardMutuController extends Controller
{
    public function index()
    {
        $items = [
            ['Karakteristik Sifat Varietas', 'Seragam', 'Seragam'],
            ['Ketuaan', 'Tua', 'Cukup Tua'],
            ['Kekerasan', 'Keras', 'Cukup Keras'],
            ['Diameter (cm) minimal', '>2,5', '1,5 - 2,5'],
            ['Kerusakan', '5', '8'],
            ['Kebusukan', '1', '2'],
            ['Kotoran', 'Tidak Ada', 'Tidak Ada'],
            ['Kekeringan', 'Kering Simpan', 'Kering Simpan'],
            ['Kadar Air', '80-85', '75-80'],
        ];
        return view('pages.standard-mutu', compact('items'))->withPageTitle('Standar Mutu');
    }
}
