<?php

namespace App\Http\Controllers;

use App\Models\inLamp;
use App\Models\outLamp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class inLampController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inLamps = inLamp::all();
        $outLamps = outLamp::all();

        return view('myHome.Lights', compact('inLamps', 'outLamps'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\inLamp  $inLamp
     * @return \Illuminate\Http\Response
     */
    public function show(inLamp $inLamp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\inLamp  $inLamp
     * @return \Illuminate\Http\Response
     */
    public function edit(inLamp $inLamp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\inLamp  $inLamp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, inLamp $inLamp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\inLamp  $inLamp
     * @return \Illuminate\Http\Response
     */
    public function destroy(inLamp $inLamp)
    {
        //
    }
    public function updateStatus(Request $request, $id)
    {

        $nextStatus = (!$request->status);

        DB::table('in_lamps')->where('id', $id)->update(
            ['status' => $nextStatus]
        );
        return \redirect()->route('lights');
    }
    public function UpdateDim(Request $request, $id)
    {

        $nextDim = ($request->dimer);


        DB::table('in_lamps')->where('id', $id)->update(
            ['dim' => $nextDim]
        );
        return \redirect()->route('lights');
    }
}
