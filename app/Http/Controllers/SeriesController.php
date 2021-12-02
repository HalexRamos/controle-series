<?php

namespace App\Http\Controllers;

class SeriesController extends Controller {
    public function index () {
        $series = [
            'Friends',
            'The Mentalist',
            'House Of Cards',
            'Cosmos',
            'Narcos'
        ];
        return view('series.index', compact('series'));
    }
}
