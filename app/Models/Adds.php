<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Adds extends Model
{
    use HasFactory;

    public $primaryKey = 'id';

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
