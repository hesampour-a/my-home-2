<?php

namespace App\Http\Controllers;

use App\Models\outLamp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminOutLightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outLamps = outLamp::all();
        return \view('admin.OutLight.index', \compact('outLamps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.OutLight.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $outLamp = outLamp::create([
            'name' => $request->input('name'),
            'persianName' => $request->input('persianName'),
            'voltageRange' => $request->input('voltageRange'),
            'powerConsumption' => $request->input('powerConsumption'),
            'connectionStatus' => 1,
            'status' => 0,
        ]);

        return redirect()->route('adminOutLights.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $outLamp = outLamp::find($id);

        return view('admin.OutLight.edit', compact('outLamp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $outLamp = outLamp::find($id);
        $outLamp->name = $request->input('name');
        $outLamp->persianName = $request->input('persianName');
        $outLamp->voltageRange = $request->input('voltageRange');
        $outLamp->powerConsumption = $request->input('powerConsumption');
        $outLamp->save();



        return redirect()->route('adminOutLights.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("out_lamps")->where('id', $id)->delete();
        return redirect()->route('adminOutLights.index');
    }
}
