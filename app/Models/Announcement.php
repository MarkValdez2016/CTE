<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $table = 'announcements';

    protected $primaryKey = 'announcementID';

    protected $fillable = [
        'announcementType', 'announcementDetails', 'announcementImage', 
    ];

    protected $timestamp = TRUE;

    public function Announcement()
    {
        return $this->hasMany('\App\Models\Announcement');
    }
}
