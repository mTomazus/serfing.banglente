<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function index() {
        $user_id = auth()->user()->id;
        $user = User::find($user_id); 
        return view('user.home')->with('posts', $user->posts);
    }

}
