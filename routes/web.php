<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

Route::get('contacts/', function () {
    return view('contacts');
});

Route::get('pamokos/', function () {
    return view('pamokos');
});

Route::get('stovykla/', function () {
    return view('stovykla');
})->name('stovykla');

Route::get('nuoma/', function () {
    return view('nuoma');
});

Route::get('varzybos/', function () {
    return view('varzybos');
});

Route::get('welcome/', function () {
    return view('welcome');
});
Route::get('karjera/', function () {
    return view('karjera');
});

Route::get('login/', function () {
    return view('login');
})->name('login');



Route::get('logout/', function() {
    Auth::logout();
    return Redirect::to('login');
 })->name('logout');


Route::middleware('auth')->group(function () {

    Route::get('user', 'App\Http\Controllers\User\HomeController@index')->name('user-home');
    Route::resource('posts', 'App\Http\Controllers\User\PostsController');

});


Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('admin', 'App\Http\Controllers\Admin\HomeController@index')->name('admin-home');

    Route::get('stovykla-table', function () { return view('admin.stovykla-table'); });

    Route::get('pamokos-table', function () {
        return view('admin.pamokos-table');
    });

    Route::get('contacts-table', function () {
        return view('admin.contacts-table');
    });

});

