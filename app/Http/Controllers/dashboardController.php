<?php

namespace App\Http\Controllers;

use App\Models\camera;
use App\Models\fridge;
use App\Models\inLamp;
use App\Models\outLamp;
use App\Models\tv;
use App\Models\washingMachine;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        $washingMachines = washingMachine::all();
        $tvs = tv::all();
        $fridges = fridge::all();
        $inLamps = inLamp::all();
        $outLamps = outLamp::all();
        $cameras = camera::all();


        return view('myHome.Dashboard', compact('fridges', 'tvs', 'washingMachines', 'cameras', 'inLamps', 'outLamps'));
    }
}
