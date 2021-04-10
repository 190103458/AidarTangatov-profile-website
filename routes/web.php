<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\post;
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


Route::redirect('/', '/en');

Route::group(['prefix'=>'{language}'],function (){
Route::get('/', function () {
    return view('main');
})->name('home');;

Route::get('/post', function () {
    $str = post::find(1);
    return $str;
});

Route::get('/work1', function () {
    return view('work1 ');
})->name('work1');

Route::get('/work2', function () {
    return view('work2 ');
})->name('work2');


Route::get('/post/create', function () {
    DB::table("post")->insert([
        'title' => 'inf232',
        'body' => 'web'

    ]);
});

Route::get('/blog', [BlogController::class, 'index']);


Route::get('/blog/create', function () {
    return view('blog.create');
});

Route::post('/blog/create', [BlogController:: class, 'store'])->name('add-post');

Route::get('/post/{id}',[BlogController:: class, 'getPost']);
});
