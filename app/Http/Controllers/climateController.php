<?php

namespace App\Http\Controllers;

use App\Models\cooler;
use App\Models\fan;
use Illuminate\Http\Request;

class climateController extends Controller
{
    public function index()
    {
        $coolers = cooler::all();
        $fans = fan::all();

        return view('myHome.Climate', compact('coolers', 'fans'));
    }
}
