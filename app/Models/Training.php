<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $table = 'trainings';

    protected $primaryKey = 'trainingID';

    protected $fillable = [

        'trainingName', 'trainingStart', 'trainingEnd', 'trainingHours', 'trainingType', 'trainingConduct',
    ];

    protected $timestamp = TRUE;
}
