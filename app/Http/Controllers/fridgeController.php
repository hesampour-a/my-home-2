<?php

namespace App\Http\Controllers;

use App\Models\fridge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class fridgeController extends Controller
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
     * @param  \App\Models\fridge  $fridge
     * @return \Illuminate\Http\Response
     */
    public function show(fridge $fridge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\fridge  $fridge
     * @return \Illuminate\Http\Response
     */
    public function edit(fridge $fridge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\fridge  $fridge
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, fridge $fridge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\fridge  $fridge
     * @return \Illuminate\Http\Response
     */
    public function destroy(fridge $fridge)
    {
        //
    }
    public function UpdateDim(Request $request, $id)
    {

        $dimer = ($request->dimer);

        DB::table('fridges')->where('id', $id)->update(
            ['temperature' => $dimer]
        );
        return \redirect()->route('appliances');
    }
}
