<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller1;

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

Route::get('/candy', function () {
    return view('candy');
});

Route::get('/aboutUs', function () {
    return view('aboutUS');
});

Route::get('/contactUs', function () {
    return view('contactUs');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signUp', function () {
    return view('signUp');
});

Route::get('/navbar', function () {
    return view('navbar');
});

Route::get('/task2/id/{id}', [Controller1::class, 'onlyNum'])->where('id', '[0-9]+');

Route::get('/task3/name/{name}', [Controller1::class, 'onlyString'])->where('name', '[A-Za-z]+');
