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
            'price' => 'required|numeric'
        ]);

        $post = new Adds;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->category = $request->input('category');
        $post->price = $request->input('price');
        $post->user_id = auth()->user()->id;
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
        $post->delete();
        return redirect('/user')->with('success', 'Skelbimas ištrintas...');
    }
}
