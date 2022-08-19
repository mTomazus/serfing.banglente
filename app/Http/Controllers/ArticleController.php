<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ArticleController extends Controller

/* straipsnių controleris */

{
    public function __invoke($page)
    {
        return view('articles.' . $page);
    }
}
