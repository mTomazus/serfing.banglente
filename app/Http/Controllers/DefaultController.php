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
        $allyears = array('2017', '2018', '2019', '2020', '2021');

        $filewithpath = Storage::files('public/camp');
        $images = preg_replace('/public/', 'storage', $filewithpath);
        $filewithpath17th = Storage::files('public/camp/2017/thumb');
        $images17th = preg_replace('/public/', 'storage', $filewithpath17th);
        $filewithpath17 = Storage::files('public/camp/2017');
        $images17 = preg_replace('/public/', 'storage', $filewithpath17);
        $filewithpath18th = Storage::files('public/camp/2018/thumb');
        $images18th = preg_replace('/public/', 'storage', $filewithpath18th);
        $filewithpath18 = Storage::files('public/camp/2018');
        $images18 = preg_replace('/public/', 'storage', $filewithpath18);
        $filewithpath19th = Storage::files('public/camp/2019/thumb');
        $images19th = preg_replace('/public/', 'storage', $filewithpath19th);
        $filewithpath19 = Storage::files('public/camp/2019');
        $images19 = preg_replace('/public/', 'storage', $filewithpath19);
        $filewithpath20th = Storage::files('public/camp/2020/thumb');
        $images20th = preg_replace('/public/', 'storage', $filewithpath20th);
        $filewithpath20 = Storage::files('public/camp/2020');
        $images20 = preg_replace('/public/', 'storage', $filewithpath20);
        $filewithpath21th = Storage::files('public/camp/2021/thumb');
        $images21th = preg_replace('/public/', 'storage', $filewithpath21th);
        $filewithpath21 = Storage::files('public/camp/2021');
        $images21 = preg_replace('/public/', 'storage', $filewithpath21);

        return view('stovykla')
                ->with('images', $images)
                ->with('images17', $images17)
                ->with('images17th', $images17th)
                ->with('images18', $images18)
                ->with('images18th', $images18th)
                ->with('images19', $images19)
                ->with('images19th', $images19th)
                ->with('images20th', $images20th)
                ->with('images20', $images20)
                ->with('images21th', $images21th)
                ->with('images21', $images21);
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
