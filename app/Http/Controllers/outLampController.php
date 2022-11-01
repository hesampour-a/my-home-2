<?php

namespace App\Http\Controllers;

use App\Models\outLamp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class outLampController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\outLamp  $outLamp
     * @return \Illuminate\Http\Response
     */
    public function show(outLamp $outLamp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\outLamp  $outLamp
     * @return \Illuminate\Http\Response
     */
    public function edit(outLamp $outLamp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\outLamp  $outLamp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, outLamp $outLamp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\outLamp  $outLamp
     * @return \Illuminate\Http\Response
     */
    public function destroy(outLamp $outLamp)
    {
        //
    }
    public function updateStatus(Request $request, $id)
    {

        $nextStatus = (!$request->status);

        DB::table('out_lamps')->where('id', $id)->update(
            ['status' => $nextStatus]
        );
        return \redirect()->route('lights');
    }
}
