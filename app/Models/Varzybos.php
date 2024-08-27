<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Divisions;

class Varzybos extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'surname', 'date', 'gender_id', 'division_id', 'email', 'phone' 
    ];

    public function division(){
        return $this->belongsTo(Divisions::class);
    }
    public function gender(){
        return $this->belongsTo(Genders::class);
    }

    public $guarded = [];
}
