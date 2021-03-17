<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stovyklos extends Model
{
    use HasFactory;
    protected $fillable = [
        'pamaina', 'name', 'surname', 'address', 'age', 'swim', 'alergy', 'email', 'phone' 
    ];
    public $guarded = [];
}
