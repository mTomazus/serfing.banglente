<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Adds;

class DefaultController extends Controller

/* neregistuoto vartotojo controleris */

{
    /* parodo visus skelbimus */
    public function index()
    {
        //$posts = Adds::all()->paginate(1);
        $posts = Adds::orderBy('created_at', 'desc')->paginate(6);
        return view('skelbimai')->with('posts', $posts);
    }
    /* parodo kiekviena skelbima atskiram lange */
    public function show($id)
    {
        $post = Adds::find($id);
        return view('show')->with('post', $post);
    }

    /* stovykla su carusele is directorijos */
    public function stovykla()
    {
        $filewithpath = Storage::files('public/camp');
        $images = preg_replace('/public/', 'storage', $filewithpath);

        return view('stovykla')->with('images', $images);
    }

    public function pamokos()
    {
        // karuseles failai
        $filewithpath = Storage::files('public/pamokos');
        $images = preg_replace('/public/', 'storage', $filewithpath);

        return view('pamokos')->with('images', $images);
    }

    public function varzybos()
    {
        // karuseles failai
        $filewithpath = Storage::files('public/varzybos');
        $images = preg_replace('/public/', 'storage', $filewithpath);

        return view('varzybos')->with('images', $images);
    }
    public function parama()
    {
        return view('parama');
    }
}
