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

Route::get('stovykla/', 'App\Http\Controllers\DefaultController@stovykla')->name('stovykla');

Route::get('stovyklos/suaugusiems/lanzarote', 'App\Http\Controllers\DefaultController@keliones')->name('keliones');

Route::get('stovyklos/', 'App\Http\Controllers\DefaultController@stovyklos')->name('stovyklos');

Route::get('burelis/', 'App\Http\Controllers\DefaultController@burelis')->name('burelis');

Route::get('pamokos/', 'App\Http\Controllers\DefaultController@pamokos')->name('pamokos');

Route::get('varzybos/', 'App\Http\Controllers\DefaultController@varzybos')->name('varzybos');

Route::get('webcamai/', 'App\Http\Controllers\DefaultController@webcamai')->name('webcamai');

Route::get('komanda/', 'App\Http\Controllers\DefaultController@komanda')->name('komanda');

Route::get('parama/', 'App\Http\Controllers\DefaultController@parama')->name('parama');

Route::get('gallery/', 'App\Http\Controllers\DefaultController@gallery')->name('gallery');

Route::get('nuoma/', function () {
    return view('nuoma');
});

Route::get('prognozes/', function () {
    return view('prognozes');
});

Route::get('rulebook/', function () {
    return view('rulebook');
});

Route::get('form/', function () {
    return view('onlyform');
});

Route::get('form2/', function () {
    return view('onlyform2');
});
Route::get('form3/', function () {
    return view('onlyform3');
});

Route::get('welcome/', function () {
    return view('welcome');
});
Route::get('karjera/', function () {
    return view('karjera');
});

Route::resource('skelbimai', 'App\Http\Controllers\DefaultController');

Route::get('login/', function () {
    return view('login');
})->name('login');



Route::get('logout/', function() {
    Auth::logout();
    return Redirect::to('/');
 });


Route::middleware('auth')->group(function () {
    Route::get('user', 'App\Http\Controllers\User\HomeController@index')->name('user-home');
    Route::resource('posts', 'App\Http\Controllers\User\PostsController');
});


Route::middleware(['auth', 'admin'])->group(function () {
    
    Route::get('admin', 'App\Http\Controllers\Admin\HomeController@index')->name('admin-home');
    Route::get('stovykla-table', 'App\Http\Controllers\Admin\HomeController@getStovyklaTable')->name('stovykla-table');
    Route::get('pamokos-table', 'App\Http\Controllers\Admin\HomeController@getPamokosTable')->name('pamokos-table');
    Route::get('contacts-table', 'App\Http\Controllers\Admin\HomeController@getContactsTable')->name('contacts-table');

    Route::get('images', 'App\Http\Controllers\GalleryController@index');

    Route::resource('products', 'App\Http\Controllers\Admin\ProductController');
});

Route::get('straipsniai/{page}', 'App\Http\Controllers\ArticleController')
    ->name('page')
    ->where('page', '[1, 2, 3, 4, 5]');

Route::get('straipsniai/', function () {
    return view('naujienos');
});