<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Adds;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = Adds::all()->paginate(1);
        $posts = Adds::orderBy('created_at', 'desc')->paginate(6);
        return view('user.posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|min:10|max:55',
            'body' => 'required|min:10|max:200',
            'category' => 'required',
            'price' => 'required|numeric',
            'image_1' => 'image|max:1999|required'
        ]);

        //Fandle file upload
        if($request->hasFile('image_1')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image_1')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just extension
            $extension = $request->file('image_1')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            $request->image_1->move(public_path('user_images'), $fileNameToStore);
        } else {
            // Get just extension
            $fileNameToStore = 'noimage.jpg';
        }

        // Create Adds
        $post = new Adds;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->category = $request->input('category');
        $post->price = $request->input('price');
        $post->user_id = auth()->user()->id;
        $post->image_1 = $fileNameToStore;
        $post->save();

        return redirect('/user')->with('success', 'Skelbimas sukurtas...');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Adds::find($id);
        return view('user.posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Adds::find($id);

        //check for corect user , except Admin
        if(auth()->user()->id !== $post->user_id && auth()->user()->type !== 'admin'){
            return redirect('/skelbimai')->with('error', 'Neturi teisių...');
        }

        return view('user.posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'category' => 'required',
            'price' => 'required'
        ]);

        $post = Adds::find($id);

        if(auth()->user()->id !== $post->user_id && auth()->user()->type !== 'admin'){
            return redirect('/skelbimai')->with('error', 'Neturi teisių...');
        }

        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->category = $request->input('category');
        $post->price = $request->input('price');
        $post->save();

        return redirect('/user')->with('success', 'Skelbimas paredaguotas...');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Adds::find($id);

        //check for corect user , except Admin
        if(auth()->user()->id !==$post->user_id && auth()->user()->type !== 'admin'){
            return redirect('/skelbimai')->with('error', 'Neturi teisių...');
        }

        $post->delete();
        return redirect('/user')->with('success', 'Skelbimas ištrintas...');
    }
}
