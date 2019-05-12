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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/details', 'PostController@details');
Route::get('/price', 'PostController@price');
Route::get('/price_desc', 'PostController@price_desc');

Route::middleware(['auth'])->group(function (){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get("/home/post","PostController@posts");
    Route::post('/post_details','PostController@post_details');
    Route::get('/edit/{id}','PostController@edit');
    Route::post('/edit/{id}','PostController@edit_post');
    Route::get('/delete/{id}','PostController@delete_post');
    Route::get('/my_posts','PostController@my_posts')->name("my_post_route");
});