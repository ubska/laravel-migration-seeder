<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        // Recuperiamo tutti i treni dal database
        $trains = Train::all();

        // Passiamo i dati alla vista 'trains.index'
        return view('trains.index', compact('trains'));
    }
}
