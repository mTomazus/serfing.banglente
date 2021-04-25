<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $table = 'chat';

    protected $fillable = [
        'message', 'user_id', 'name',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
