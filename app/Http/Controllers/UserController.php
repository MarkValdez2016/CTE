<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Hash;

use\App\Models\User;
use\App\Models\Role;

class UserController extends Controller
{
    public function register(Request $request){

        try {
            $request->validate([
                'userLastName'  => 'required',
                'userFirstName' => 'required',
                'email'         => 'required',
                'password'      => 'required'
            ]);
    
            $user = new User;
    
            $user->userLastName     = $request->userLastName;
            $user->userFirstName    = $request->userFirstName;
            $user->email            = $request->email;
            $user->password         = hash::make($request->password);
    
            $user->save();

            $role = Role::select('id')->where('name', 'Staff')->first();
            $user->role()->attach($role);

            return back();

        } catch (\Throwable $th) {
            throw $th;
           
        }
        

    }

    public function login() 
    {
            
    }
    
    public function update(Request $request, $id) {

        try {
            $userdata = User::find($request->id);

            $userdata->userLastName          =$request->userLastName;
            $userdata->userFirstName         =$request->userFirstName;
            $userdata->email                 =$request->email;
            $userdata->password              =$request->password;
            
            
            $userdata->save();
            
            return back();
            
            echo 'DONE';
        } catch (\Throwable $th) {
            throw $th;
        }   echo 'Error';
    }

    public function destroy($id) 
    {
            $userdata = User::find($id);

            return $userdata->delete();

            return back();
         
    }

    
}
