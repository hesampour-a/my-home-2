<?php

namespace App\Http\Controllers;

use App\Models\cooler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class coolerController extends Controller
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
     * @param  \App\Models\cooler  $cooler
     * @return \Illuminate\Http\Response
     */
    public function show(cooler $cooler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\cooler  $cooler
     * @return \Illuminate\Http\Response
     */
    public function edit(cooler $cooler)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\cooler  $cooler
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cooler $cooler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\cooler  $cooler
     * @return \Illuminate\Http\Response
     */
    public function destroy(cooler $cooler)
    {
        //
    }
    public function UpdateDesiredTemperature(Request $request, $id)
    {

        $DesiredTemperature = ($request->desiredTemperature);
        $currentTemperature = ($request->currentTemperature);
        if ($DesiredTemperature < $currentTemperature) {
            $nextStatus = (\true);

            DB::table('coolers')->where('id', $id)->update(
                ['status' => $nextStatus]
            );
        } else {
            $nextStatus = (\false);

            DB::table('coolers')->where('id', $id)->update(
                ['status' => $nextStatus]
            );
        }
        DB::table('coolers')->where('id', $id)->update(
            ['desiredTemperature' => $DesiredTemperature]
        );
        return \redirect()->route('climate');
    }
}
