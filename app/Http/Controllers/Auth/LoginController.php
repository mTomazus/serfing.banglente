<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function redirectPath() {

        if (auth()->user()-IsAdmin) {
            return route('admin.dashboard');
        }

        return route('user.dashboard');

    }
}
