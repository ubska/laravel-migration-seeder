<?php

namespace App\Http\Controllers;

use App\Models\Train; // Assicurati di importare il modello Train
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        $title = 'Layout base - HOME';
        $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo modi, iusto dolore eaque laudantium optio, adipisci perspiciatis voluptate obcaecati sit perferendis natus velit ut! Tempora voluptatum ipsam modi rem voluptas.';

        return view('home', compact('trains', 'text', 'title'));
    }
}
