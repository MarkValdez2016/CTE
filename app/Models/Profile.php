<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Profile extends Model
{
    use HasFactory;

    protected $table = 'profiles';

    protected $primaryKey = 'profileID';

    protected $fillable = [
            'profileLname', 'profileFname', 'profileLname',
            'profileGender', 'profileAddress', 'profileBirthDate',
            'profilePicture', 'profileReligion', 'profileCivilStatus',
            'profileZipCode',
    ];
    
protected $timestamp = TRUE;

public function profile() {
    return $this->hasMany('App\Models\Profile');
}
    

public function users (){
    return $this->belongsToMany('App\Models\User');
}
}
