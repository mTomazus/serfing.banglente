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
        $allyears = array('2017', '2018', '2019', '2020', '2021', '2022');
        $images = array();
        $images_thumbs = array();

        foreach($allyears as $year) {
            $filewithpath = Storage::files('public/camp/'.$year);
            $images[] = preg_replace('/public/', 'storage', $filewithpath);
            $filewithpath_thumb = Storage::files('public/camp/'.$year.'/thumb');
            $images_thumbs[] = preg_replace('/public/', 'storage', $filewithpath_thumb);
        }

        return view('stovykla')
                ->with('images17', $images[0])
                ->with('images17th', $images_thumbs[0])
                ->with('images18', $images[1])
                ->with('images18th', $images_thumbs[1])
                ->with('images19', $images[2])
                ->with('images19th', $images_thumbs[2])
                ->with('images20', $images[3])
                ->with('images20th', $images_thumbs[3])
                ->with('images21', $images[4])
                ->with('images21th', $images_thumbs[4])
                ->with('images22', $images[5])
                ->with('images22th', $images_thumbs[5]); 
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

    public function keliones()
    {
        // kelioniu karuseles failai
        $filewithpath = Storage::files('public/keliones');
        $images = preg_replace('/public/', 'storage', $filewithpath);

        return view('keliones')->with('images', $images);
    }

    public function gallery()
    {
        // gallery failai
        $filewithpath = Storage::files('public/uploaded_images');
        $images = preg_replace('/public/', 'storage', $filewithpath);

        return view('gallery')->with('images', $images);
    }

    public function parama()
    {
        return view('parama');
    }

    public function images()
    {
        return view('images');
    }

    public function webcamai()
    {
        return view('webcamai');
    }
    
    public function burelis()
    {
        return view('burelis');
    }

    public function stovyklos()
    {
        return view('stovyklos');
    }
}
