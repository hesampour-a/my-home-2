<?php

namespace App\Http\Controllers;

use App\Models\fan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class fanController extends Controller
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
     * @param  \App\Models\fan  $fan
     * @return \Illuminate\Http\Response
     */
    public function show(fan $fan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fan  $fan
     * @return \Illuminate\Http\Response
     */
    public function edit(fan $fan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fan  $fan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fan $fan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fan  $fan
     * @return \Illuminate\Http\Response
     */
    public function destroy(fan $fan)
    {
        //
    }
    public function updateStatus(Request $request, $id)
    {

        $nextStatus = (!$request->status);

        DB::table('fans')->where('id', $id)->update(
            ['status' => $nextStatus]
        );
        return \redirect()->route('climate');
    }
    public function UpdateDim(Request $request, $id)
    {

        $nextDim = ($request->dimer);


        DB::table('fans')->where('id', $id)->update(
            ['dim' => $nextDim]
        );
        return \redirect()->route('climate');
    }
}
