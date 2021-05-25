<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reserv extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'number', 'service', 'date', 'time' 
    ];
    public $guarded = [];
}
