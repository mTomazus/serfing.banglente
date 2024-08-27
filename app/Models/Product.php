<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Image;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'brand', 'name', 'price', 'description', 'details'
    ];
    public function images()
    {
     return $this->hasMany(Image::class);
    }
}
