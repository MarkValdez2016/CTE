<?php

namespace App\Http\Controllers;

use App\Models\Schedules;
use Illuminate\Http\Request;

class SchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scheduledata = Schedules::all();
        return $scheduledata;
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
        $scheduledata = new Schedules;

        $scheduledata -> scheduleName           = request('scheduleName');
        $scheduledata -> scheduleDay            = request('scheduleDay');
        $scheduledata -> scheduleStartTime      = request('scheduleStartTime');
        $scheduledata -> scheduleEndTime        = request('scheduleEndTime');

        $scheduledata->save();
        
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Schedules  $schedules
     * @return \Illuminate\Http\Response
     */
    public function show(Schedules $schedules)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schedules  $schedules
     * @return \Illuminate\Http\Response
     */
    public function edit(Schedules $schedules)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schedules  $schedules
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schedules $schedules)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schedules  $schedules
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schedules $schedules)
    {
        
    }
}
