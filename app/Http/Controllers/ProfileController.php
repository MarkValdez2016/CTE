<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use DB;

class ProfileController extends Controller
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
        //
        try {

            $request->validate([
                'profileLname'=>'required|max:191',
                'profileFname'=>'required|max:191',
                'profileMname'=>'required|max:191',
                'profileGender'=>'required|max:191',
                'profileAddress'=>'required|max:191',
                'profileBirthDate'=>'required|max:191',
                'profilePicture'=>'required|max:191',
                'profileReligion'=>'required|max:191',
                'profileCivilStatus'=>'required|max:191',
                'profileZipCode'=>'required|max:191',
            ]);
            
            $profile = new Profile;
            
            $profile->profileLname          =request('profileLname');
            $profile->profileFname          =request('profileFname');
            $profile->profileMname          =request('profileMname');
            $profile->profileGender         =request('profileGender');
            $profile->profileAddress        =request('profileAddress');
            $profile->profileBirthDate      =request('profileBirthDate');
            $profile->profilePicture        =request('profilePicture');
            $profile->profileReligion       =request('profileReligion');
            $profile->profileCivilStatus    =request('profileCivilStatus');
            $profile->profileZipCode        =request('profileZipCode');

            $profile->created_at            =now();
            $profile->updated_at            =now();
            $profile->save();
            return response()->json(['message'=> 'Profile added successfully'], 200);

        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $profilesData = Profile::find($id);
        return $profilesData;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function edit(Profile $profile)
    {
        $profile = Profile::find($id);
        return $profile;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $profile = Profile::find($request->id);

            $profile->profileLname       =$request->profileLname;
            $profile->profileFname       =$request->profileFname;
            $profile->profileMname       =$request->profileMname;
            $profile->profileGender      =$request->profileGender;
            $profile->profileAddress     =$request->profileAddress;
            $profile->profileBirthDate   =$request->profileBirthDate;
            $profile->profilePicture     =$request->profilePicture;
            $profile->profileReligion    =$request->profileReligion;
            $profile->profileCivilStatus =$request->profileCivilStatus;
            $profile->profileZipCode     =$request->profileZipCode;
            
            $profile->save();
            
            return response()->json(['Message'=>'Successfully updated'],200);
            
        } catch (\Throwable $th) {
            //throw $th;
        }   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Profile  $profile
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        try {
            $data = Profile::find($id);
            $data->delete();
            return response()->json(['Message'=>'Delete Successfully'],200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
