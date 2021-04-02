<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('home');
});

Route::get('contacts', function () {
    return view('contacts');
});

Route::get('pamokos', function () {
    return view('pamokos');
});

Route::get('stovykla', function () {
    return view('stovykla');
});

Route::get('nuoma', function () {
    return view('nuoma');
});

Route::get('varzybos', function () {
    return view('varzybos');
});

Route::get('welcome', function () {
    return view('welcome');
});
Route::get('karjera', function () {
    return view('karjera');
});

Route::get('login', function () {
    return view('login');
})->name('login');


Route::get('logout', function(){
    Auth::logout();
    return Redirect::to('home');
 })->name('logout');


Route::get('contacts-table', function () {
    return view('contacts-table');
})->name('admin-home')->middleware('admin');



Route::get('stovykla-table', function () {
        
    if (Gate::allows('admin-only', Auth::user())) {
    
        return view('stovykla-table');
    
    }else{

        return view('home');

    }
    
});

Route::get('pamokos-table', function () {
        
    if (Gate::allows('admin-only', Auth::user())) {
    
        return view('pamokos-table');
    
    }else{

        return view('home');

    }
    
});




Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    'namespace' => 'Admin',
    'middleware' => ['auth', 'IsAdmin']
 ], function () {
     Route::get('/', HomeController::class, 'index')->name('home');
 });

 Route::group([
    'prefix' => 'user',
    'as' => 'user.',
    'namespace' => 'User',
    'middleware' => ['auth']
 ], function () {
     Route::get('/', HomeController::class, 'index')->name('home');
 });

