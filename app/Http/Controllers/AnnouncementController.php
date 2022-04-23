<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
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
        try {
            $announcementData = new Announcement;
            
            $announcementData->announcementType              =request('announcementType');
            $announcementData->announcementDetails           =request('announcementDetails');
            $announcementData->announcementImage             =request('announcementImage');
            $announcementData->save();
            
            return response()->json(['Message'=>'Successfully stored'],200);
            
        } catch (\Throwable $th) {
            //throw $th;
        }   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function show(Announcement $announcement)
    {
        $announcementData = Announcement::all();
            return $announcementData;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function edit(Announcement $announcement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $announcementData = Announcement::find($request->id);

            $announcementData->announcementType       =$request->announcementType;
            $announcementData->announcementDetails       =$request->announcementDetails;
            $announcementData->announcementImage       =$request->announcementImage;
            
            $announcementData->save();
            
            return response()->json(['Message'=>'Successfully updated'],200);
            
        } catch (\Throwable $th) {
            //throw $th;
        }   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Announcement  $announcement
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $announcementData = Announcement::find($id);
            $announcementData->delete();
            return response()->json(['Message'=>'Delete Successfully'],200);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
