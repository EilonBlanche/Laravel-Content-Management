<?php

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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return redirect('login');
});


Route::get('/login', function(){
    return view('login');
});


// Route::get('/logout', function(){
//     // Auth::logout();
//     // return redirect('login');
// });

Route::resource('lyrics', 'LyricsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/menu', 'HomeController@menu')->name('home');
