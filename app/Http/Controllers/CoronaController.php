<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class CoronaController extends Controller
{
    public function index()
    {
        $response = Http::get('https://api.kawalcorona.com/indonesia');
        $result = $response->json();
        $provinsi = Http::get('https://api.kawalcorona.com/indonesia/provinsi');
        $dataProvinsi = $provinsi->json();
        return view('home', ['data' => $result, 'provinsi' => $dataProvinsi]);
    }
}
