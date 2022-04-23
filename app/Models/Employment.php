<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    use HasFactory;

    protected $table = 'employments';

    protected $primaryKey = 'employmentID';

    protected $fillable = [
        'employmentWmsuID', 'employmentprcLicenseID', 'employmentDepartment',
        'employmentDate',
];
  
protected $timestamp = TRUE;

public function employment() 
{
    return $this->hasMany('App\Models\Profile');
}
    

public function users ()
{
    return $this->belongsToMany('App\Models\User');
}

}
