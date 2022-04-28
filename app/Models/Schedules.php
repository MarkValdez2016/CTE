<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    use HasFactory;

    protected $table = 'schedules';

    protected $primaryKey = 'scheduleID';

    protected $fillable = [

        'scheduleName', 'scheduleDay', 'scheduleStartTime', 'scheduleEndTime',
    ];

    protected $timestamp = TRUE;
}
