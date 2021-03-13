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


Route::get('/main', function(){
	return view('index');
})->name('main');
Route::get('/contact', function(){
	return view('contact');})->name('contact');
Route::get('/abme', function(){
	return view('aboutMe');
})->name('abme');

