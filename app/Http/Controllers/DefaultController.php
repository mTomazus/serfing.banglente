<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Adds;

class DefaultController extends Controller
{
    public function index()
    {
        //$posts = Adds::all()->paginate(1);
        $posts = Adds::orderBy('created_at', 'desc')->paginate(6);
        return view('skelbimai')->with('posts', $posts);
    }

    public function show($id)
    {
        $post = Adds::find($id);
        return view('show')->with('post', $post);
    }
}