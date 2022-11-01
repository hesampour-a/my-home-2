<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class outLamp extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'persianName',
        'status',
        'connectionStatus',
        'dailyAvrage',
        'voltageRange',
        'powerConsumption',
    ];
}
