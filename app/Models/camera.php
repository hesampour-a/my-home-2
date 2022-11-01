<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class camera extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'persianName',
        'status',
        'nightVision',
        'connectionStatus',
        'timeLapseStatus',
    ];
}
