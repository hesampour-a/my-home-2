<?php

namespace App\Http\Controllers;

use App\Models\camera;
use Illuminate\Http\Request;
use DB;


class cameraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = camera::all();

        return view('myHome.Cameras', compact('data'));
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
     * @param  \App\Models\camera  $camera
     * @return \Illuminate\Http\Response
     */
    public function show(camera $camera)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\camera  $camera
     * @return \Illuminate\Http\Response
     */
    public function edit(camera $camera)
    {
        //
    }
    public function updateStatus(Request $request, $id)
    {

        //$user = User::find($id);



        //$currentStatus = DB::table('users')->where('id', $id)->pluck('status');
        //$nextStatus = $currentStatus[0] == "block" ? 'active' : 'block';
        $nextStatus = (!$request->status);
        //dd($currentStatus[0] == 'active');
        //$nextStatus = '';
        /*  if ($currentStatus === 'active') {
            $nextStatus = 'block';
        } elseif ($currentStatus === 'block') {
            $nextStatus = 'active';
        } */
        //dd($nextStatus);
        DB::table('cameras')->where('id', $id)->update(
            ['status' => $nextStatus]
        );
        return \redirect()->route('cameras');
    }
    public function updateStatusNightVision(Request $request, $id)
    {

        //$user = User::find($id);



        //$currentStatus = DB::table('users')->where('id', $id)->pluck('status');
        //$nextStatus = $currentStatus[0] == "block" ? 'active' : 'block';
        $nextStatus = ($request->number);
        //dd($currentStatus[0] == 'active');
        //$nextStatus = '';
        /*  if ($currentStatus === 'active') {
            $nextStatus = 'block';
        } elseif ($currentStatus === 'block') {
            $nextStatus = 'active';
        } */
        //dd($nextStatus);
        DB::table('cameras')->where('id', $id)->update(
            ['nightVision' => $nextStatus]
        );
        return \redirect()->route('cameras');
    }
    public function updateStatusTimeLapse(Request $request, $id)
    {

        //$user = User::find($id);



        //$currentStatus = DB::table('users')->where('id', $id)->pluck('status');
        //$nextStatus = $currentStatus[0] == "block" ? 'active' : 'block';
        $nextStatus = ($request->number);
        //dd($currentStatus[0] == 'active');
        //$nextStatus = '';
        /*  if ($currentStatus === 'active') {
            $nextStatus = 'block';
        } elseif ($currentStatus === 'block') {
            $nextStatus = 'active';
        } */
        //dd($nextStatus);
        DB::table('cameras')->where('id', $id)->update(
            ['timeLapseStatus' => $nextStatus]
        );
        return \redirect()->route('cameras');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\camera  $camera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $camera = camera::find($id);
        $camera->update($input);

        return redirect()->route('cameras')
            ->with('success', 'camera updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\camera  $camera
     * @return \Illuminate\Http\Response
     */
    public function destroy(camera $camera)
    {
        //
    }
}
