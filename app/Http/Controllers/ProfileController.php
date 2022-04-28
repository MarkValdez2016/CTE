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
            
            $uploadedfile = $request->profilePicture->store('/public/uploads');

            $profile = new Profile;
            
            $profile->profileLname          =request('profileLname');
            $profile->profileFname          =request('profileFname');
            $profile->profileMname          =request('profileMname');
            $profile->profileGender         =request('profileGender');
            $profile->profileAddress        =request('profileAddress');
            $profile->profileBirthDate      =request('profileBirthDate');
            $profile->profilePicture        =request('profilePicture')->hashName();
            $profile->profileReligion       =request('profileReligion');
            $profile->profileCivilStatus    =request('profileCivilStatus');
            $profile->profileZipCode        =request('profileZipCode');

            $profile->created_at            =now();
            $profile->updated_at            =now();
            $profile->save();
            
            return back();

        } catch (\Throwable $th) {
            throw $th;
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
            
            return back();

            
            
        } catch (\Throwable $th) {
            // throw $th;

        
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
            
            return back();
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
