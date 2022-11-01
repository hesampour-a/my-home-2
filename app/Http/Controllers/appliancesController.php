<?php

namespace App\Http\Controllers;

use App\Models\fridge;
use App\Models\tv;
use App\Models\washingMachine;
use Illuminate\Http\Request;

class appliancesController extends Controller
{
    public function index()
    {
        $washingMachines = washingMachine::all();
        $tvs = tv::all();
        $fridges = fridge::all();

        return view('myHome.Appliances', compact('fridges', 'tvs', 'washingMachines'));
    }
}
