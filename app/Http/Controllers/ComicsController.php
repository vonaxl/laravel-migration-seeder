<?php

namespace App\Http\Controllers;
use App\Comic;
use Illuminate\Http\Request;

class ComicsController extends Controller
{
    public function index() {

        $comics = Comic::all();

        // dd($comics);

        return view('comics', compact('comics'));

    }
}