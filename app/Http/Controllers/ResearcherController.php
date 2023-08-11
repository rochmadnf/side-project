<?php

namespace App\Http\Controllers;

class ResearcherController extends Controller
{
    public function index()
    {
        $researcher = [
            [
                "name"           => "Selvy Musdalifah, S.Si., M.Si",
                "expertise"      => "Matematika Analisis",
                "google_scholar" => "https://scholar.google.com/citations?hl=en&user=S88DTYYAAAAJ",
            ],
            [
                "name"           => "Agusman Sahari, S.Si., M.Si",
                "expertise"      => "Matematika Terapan",
                "google_scholar" => "https://scholar.google.com/citations?hl=en&user=WDQfWIwAAAAJ",

            ],
            [
                "name"           => "Desy Lusiyanti, S.Si., M.Si",
                "expertise"      => "Matematika Komputasi",
                "google_scholar" => "https://scholar.google.com/citations?hl=en&user=7QKsz7AAAAAJ",
            ],
        ];

        return view('pages.researcher', compact('researcher'));
    }
}
