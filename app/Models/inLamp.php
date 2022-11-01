<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class inLamp extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'persianName',
        'status',
        'dim',
        'connectionStatus',
        'dailyAvrage',
        'voltageRange',
        'powerConsumption',
    ];
}
