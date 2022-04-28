<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requested extends Model
{
    use HasFactory;

    protected $table = 'requesteds';

    protected $primaryKey = 'requestedID';

    protected $fillable = [
        'requestDetails', 'requestImage',
    ];

    protected $timestamp = TRUE;
}
