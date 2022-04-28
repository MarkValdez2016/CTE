<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        DB::table('role_user')->truncate();


        $adminRole = Role::where('name','Admin')->first();
 
        $admin = User::create([
            'userLastName' => 'Admin',
            'userFirstName' => 'CTE',
            'email' => 'admincte@wmsu.edu.ph',
            'password' => Hash::make('admincte'),
        ]);

        $admin->role()->attach($adminRole);
    }
}
