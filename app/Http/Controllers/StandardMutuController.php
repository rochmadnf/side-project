<?php

namespace App\Http\Controllers;

class StandardMutuController extends Controller
{
    protected $items = [
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

    public function index()
    {
        return view('pages.standard-mutu', ['items' => $this->items])->withPageTitle('Standar Mutu');
    }

    public function webview()
    {
        return view('pages.webview.standard-mutu', ['items' => $this->items])->withPageTitle('Standar Mutu');
    }
}
