<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pamokos extends Model
{
    use HasFactory;
    protected $fillable = [
        'paslauga', 'date', 'name', 'email', 'address', 'phone' 
    ];
    public $guarded = [];
}
