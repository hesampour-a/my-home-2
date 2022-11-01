<?php

namespace App\Http\Controllers;

use App\Models\inLamp;
use App\Models\outLamp;
use Illuminate\Http\Request;

class lightController extends Controller
{
    public function index()
    {
        $inLamps = inLamp::all();
        $outLamps = outLamp::all();

        return view('myHome.Lights', compact('inLamps', 'outLamps'));
    }
}
