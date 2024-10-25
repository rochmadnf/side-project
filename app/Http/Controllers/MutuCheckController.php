<?php

namespace App\Http\Controllers;

class MutuCheckController extends Controller
{
    public function __invoke()
    {
        return view('pages.mutu-check');
    }
}
