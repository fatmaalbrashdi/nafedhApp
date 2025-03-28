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
    return view('home.welcome');
});
Route::get('/about', function(){
    return view('home/about');
});

Route::get('/services', function(){
    return view('home/services');
});

Route::get('/questions', function(){
    return view('home/questions');
});

Route::get('/contact', function(){
    return view('home/contact');
});