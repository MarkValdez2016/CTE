<?php

namespace App\Http\Controllers;

use App\Models\Requested;
use Illuminate\Http\Request;
use DB;
class RequestedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Requested::all();
            return $data;
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
            $uploadedfile = $request->requestImage->store('/public/uploads');
            
            $requestedData = new Requested;
            
            $requestedData->requestDetails         =request('requestDetails');
            $requestedData->requestImage           =request('requestImage')->hashName();
            $requestedData->requestStatus          =request('requestStatus');

            $requestedData->save();
            
            return back();

        } catch (\Throwable $th) {
            throw $th;
        }   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Requested  $requested
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $requestData = Requested::find($id);
            return $requestData;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Requested  $requested
     * @return \Illuminate\Http\Response
     */
    public function edit(Requested $requested)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Requested  $requested
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Requested $requested)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Requested  $requested
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $data = Requested::find($id);
            $data->delete();
            return back();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
