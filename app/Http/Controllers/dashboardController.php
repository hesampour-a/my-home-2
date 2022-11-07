<?php

namespace App\Http\Controllers;

use App\Models\camera;
use App\Models\fridge;
use App\Models\inLamp;
use App\Models\outLamp;
use App\Models\tv;
use App\Models\washingMachine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
    public function updateStatus_inLamp(Request $request, $id)
    {

        $nextStatus = (!$request->status);

        DB::table('in_lamps')->where('id', $id)->update(
            ['status' => $nextStatus]
        );
        return \redirect()->route('dashboard');
    }
    public function updateStatus_outLamp(Request $request, $id)
    {

        $nextStatus = (!$request->status);

        DB::table('out_lamps')->where('id', $id)->update(
            ['status' => $nextStatus]
        );
        return \redirect()->route('dashboard');
    }
    public function updateStatus_camera(Request $request, $id)
    {

        $nextStatus = (!$request->status);

        DB::table('cameras')->where('id', $id)->update(
            ['status' => $nextStatus]
        );
        return \redirect()->route('dashboard');
    }
}
