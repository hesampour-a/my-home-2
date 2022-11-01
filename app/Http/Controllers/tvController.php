<?php

namespace App\Http\Controllers;

use App\Models\tv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tvController extends Controller
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
     * @param  \App\Models\tv  $tv
     * @return \Illuminate\Http\Response
     */
    public function show(tv $tv)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tv  $tv
     * @return \Illuminate\Http\Response
     */
    public function edit(tv $tv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\tv  $tv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tv $tv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tv  $tv
     * @return \Illuminate\Http\Response
     */
    public function destroy(tv $tv)
    {
        //
    }
    public function updateStatus(Request $request, $id)
    {

        $nextStatus = (!$request->status);

        DB::table('tvs')->where('id', $id)->update(
            ['status' => $nextStatus]
        );
        return \redirect()->route('appliances');
    }

    public function UpdateDim(Request $request, $id)
    {

        $dimer = ($request->dimer);

        DB::table('tvs')->where('id', $id)->update(
            ['volume' => $dimer]
        );
        return \redirect()->route('appliances');
    }
}
