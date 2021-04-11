<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;
use App\Models\Lab;

use App\Http\Controllers\BlogController;
use App\Http\Controllers\UploadFileController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\LocalizationController;
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





Route::get('/post/create', function(){
DB::table('post')->insert([
'id'=>9,
'title'=>'It is a title',
'body'=>'It is a body'
]);
});

Route::get('/post', function(){
$post=Post::find(9);
return $post;
});


Route::get('blog/index',[BlogController::class,'index']);

Route::get('blog/create',function(){
	return view('blog.create');
});
Route::post('blog/create',[BlogController::class,'store'])->name('add-post');

Route::get('post/{id}',[BlogController::class,'get_post']);

Route::post('la/lab9',[UploadFileController::class,'sub'])->name('add-la');
Route::get('la/lab9',function(){
	return view('la.lab9');
});

Route::get('la/index',[UploadFileController::class,'index']);

Route::post('/uploadfile',[UploadFileController::class,'showUpload']);
Route::get('/uploadfile',[UploadFileController::class,'in']);


Route::get('mail/send',[MailController::class,'send']);


Route::get('main/{lang}',function($lang){
	App::setlocale($lang);
	return view('index');
})->name('main');

Route::get('/contact/{lang}', function($lang){
	App::setlocale($lang);
	return view('contact');})->name('contact');


Route::get('/abme/{lang}', function($lang){
	App::setlocale($lang);
	return view('aboutMe');
})->name('abme');
