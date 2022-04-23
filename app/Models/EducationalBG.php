<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EducationalBG extends Model
{
    use HasFactory;
    use HasFactory;

    protected $table = 'educational_b_g_s';

    protected $primaryKey = 'educationalID';

    protected $fillable = [
            'educationalschool', 'educationalCourse', 'educationalfromDate',
            'educationalschooltoDate', 'educationalattainment',
    ];
    
protected $timestamp = TRUE;

public function educationalBG() {
    return $this->hasMany('App\Models\EducationalBG');
}
    

public function users (){
    return $this->belongsToMany('App\Models\User');
}
}
