<?php

namespace App\Http\Controllers;

use App\Models\inLamp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminInLightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inLamps = inLamp::all();
        return \view('admin.InLight.index', \compact('inLamps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.InLight.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inLamp = inLamp::create([
            'name' => $request->input('name'),
            'persianName' => $request->input('persianName'),
            'voltageRange' => $request->input('voltageRange'),
            'powerConsumption' => $request->input('powerConsumption'),
            'dailyAvrage' => 0,
            'connectionStatus' => 1,
            'dim' => 50,
            'status' => 0,
        ]);

        return redirect()->route('adminInLights.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $inLamp = inLamp::find($id);


        return view('admin.InLight.show', compact('inLamp'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inLamp = inLamp::find($id);

        return view('admin.InLight.edit', compact('inLamp'));
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
        $inLamp = inLamp::find($id);
        $inLamp->name = $request->input('name');
        $inLamp->persianName = $request->input('persianName');
        $inLamp->voltageRange = $request->input('voltageRange');
        $inLamp->powerConsumption = $request->input('powerConsumption');
        $inLamp->save();



        return redirect()->route('adminInLights.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table("in_lamps")->where('id', $id)->delete();
        return redirect()->route('adminInLights.index');
    }
}
