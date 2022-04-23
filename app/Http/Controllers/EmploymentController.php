<?php

namespace App\Http\Controllers;

use App\Models\Employment;
use Illuminate\Http\Request;
use DB;

class EmploymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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

            $request->validate([
                'employmentWmsuID'=>'required|max:191',
                'employmentprcLicenseID'=>'required|max:191',
                'employmentDepartment'=>'required|max:191',
                'employmentDate'=>'required|max:191',
            ]);
            
            $employment = new Employment;
            
            $employment->employmentWmsuID          =request('employmentWmsuID');
            $employment->employmentprcLicenseID    =request('employmentprcLicenseID');
            $employment->employmentDepartment      =request('employmentDepartment');
            $employment->employmentDate            =request('employmentDate');

            $employment->created_at            =now();
            $employment->updated_at            =now();
            $employment->save();

            return response()->json(['message'=> 'Profile added successfully'], 200);

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employmentData = Employment::find($id);
            return $employmentData;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function edit(Employment $employment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $employmentdata = Employment::find($request->id);      
            
            $employmentdata->employmentWmsuID               =$request->employmentWmsuID;
            $employmentdata->employmentprcLicenseID         =$request->employmentprcLicenseID;
            $employmentdata->employmentDepartment           =$request->employmentDepartment;
            $employmentdata->employmentDate                 =$request->employmentDate;
            
            $employmentdata->save();
            
            return response()->json(['Message'=>'Successfully updated'],200);
         } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employment  $employment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $employmentdata = Employment::find($id);
            $employmentdata->delete();
            return response()->json(['Message'=>'Delete Successfully'],200);
        } catch (\Throwable $th) {
            //throw $th;
        }
    }
}
