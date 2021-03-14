<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

use App\Http\Controllers\BlogController;
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
Route::get('/post/create', function(){
DB::table('post')->insert([
'id'=>1,
'title'=>'It is a title',
'body'=>'It is a body'
]);
});

Route::get('/post', function(){
$post=Post::find(1);
return $post;
});

Route::get('blog/index',[BlogController::class,'index']);

Route::get('blog/create',function(){
	return view('blog.create');
});
Route::post('blog/create',[BlogController::class,'store'])->name('add-post');

Route::get('post/{id}',[BlogController::class,'get_post']);