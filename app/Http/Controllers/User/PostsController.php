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
            'body' => 'required|min:10|max:250',
            'category' => 'required',
            'price' => 'required|numeric',
            'phone' => 'required',
            'image_1' => 'image|max:1999|required',
            'image_2' => 'image|max:1999',
            'image_3' => 'image|max:1999'
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
        if($request->hasFile('image_2')){
            // Get filename with the extension
            $filenameWithExt2 = $request->file('image_2')->getClientOriginalName();
            // Get just filename
            $filename2 = pathinfo($filenameWithExt2, PATHINFO_FILENAME);
            // Get just extension
            $extension2 = $request->file('image_2')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore2 = $filename2.'_'.time().'.'.$extension2;
            // Upload Image
            $request->image_2->move(public_path('user_images'), $fileNameToStore2);
        } else {
            // Get just extension
            $fileNameToStore2 = 'noimage.jpg';
        }
        if($request->hasFile('image_3')){
            // Get filename with the extension
            $filenameWithExt3 = $request->file('image_3')->getClientOriginalName();
            // Get just filename
            $filename3 = pathinfo($filenameWithExt3, PATHINFO_FILENAME);
            // Get just extension
            $extension3 = $request->file('image_3')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore3 = $filename3.'_'.time().'.'.$extension3;
            // Upload Image
            $request->image_3->move(public_path('user_images'), $fileNameToStore3);
        } else {
            // Get just extension
            $fileNameToStore3 = 'noimage.jpg';
        }

        // Create Adds
        $post = new Adds;
        $post->title = $request->input('title');
        $post->body = $request->input('body');
        $post->category = $request->input('category');
        $post->price = $request->input('price');
        $post->phone = $request->input('phone');
        $post->user_id = auth()->user()->id;
        $post->image_1 = $fileNameToStore;
        $post->image_2 = $fileNameToStore2;
        $post->image_3 = $fileNameToStore3;
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
            'price' => 'required',
            'phone' => 'required'
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
