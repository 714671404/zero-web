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

Route::get('/', function () {return view('index');});
Route::get('/login', function () {return view('auth.login');});
Route::get('/register', function () {return view('auth.register');});
Route::get('/article/{id}', function ($id) {
    if (empty(\App\Model\Article::find($id))) {return view('error.error');}
    return view('articles.show');
});
Route::get('/error', function () {return view('error.error');});