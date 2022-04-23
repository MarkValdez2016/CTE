<?php

namespace App\Http\Controllers;

use App\Models\EducationalBG;
use Illuminate\Http\Request;

class EducationalBGController extends Controller
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

            $request->validate([
                'educationalschool'=>'required|max:191',
                'educationalCourse'=>'required|max:191',
                'educationalfromDate'=>'required|max:191',
                'educationalschooltoDate'=>'required|max:191',
                'educationalattainment'=>'required|max:191',

            ]);
            
            $educationaldata = new EducationalBG;
            
            $educationaldata->educationalschool          =request('educationalschool');
            $educationaldata->educationalCourse          =request('educationalCourse');
            $educationaldata->educationalfromDate        =request('educationalfromDate');
            $educationaldata->educationalschooltoDate    =request('educationalschooltoDate');
            $educationaldata->educationalattainment      =request('educationalattainment');
    

            $educationaldata->created_at            =now();
            $educationaldata->updated_at            =now();
            $educationaldata->save();
            return response()->json(['message'=> 'Profile added successfully'], 200);

        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EducationalBG  $educationalBG
     * @return \Illuminate\Http\Response
     */
    public function show(EducationalBG $educationalBG)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EducationalBG  $educationalBG
     * @return \Illuminate\Http\Response
     */
    public function edit(EducationalBG $educationalBG)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EducationalBG  $educationalBG
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $educationaldata = EducationalBG::find($request->id);

            $educationaldata->educationalschool         =$request->educationalschool;
            $educationaldata->educationalCourse         =$request->educationalCourse;
            $educationaldata->educationalfromDate       =$request->educationalfromDate;
            $educationaldata->educationalschooltoDate   =$request->educationalschooltoDate;
            $educationaldata->educationalattainment     =$request->educationalattainment;
           
            
            $educationaldata->save();
            
            return response()->json(['Message'=>'Successfully updated'],200);
            
        } catch (\Throwable $th) {
            //throw $th;
        }   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EducationalBG  $educationalBG
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $data = EducationalBG::find($id);
            $data->delete();
            return response()->json(['Message'=>'Delete Successfully'],200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
