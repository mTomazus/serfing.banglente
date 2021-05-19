<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller

{
    /* parodo visas nuotraukas */
    public function index()
    {
        $images = Gallery::orderBy('created_at', 'desc')->paginate(20);
        return view('images')->with('images', $images);
    }
    
}
