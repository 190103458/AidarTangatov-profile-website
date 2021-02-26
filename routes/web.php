<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\post;

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
//ending

Route::get('/', function () {
    return view('main');
});

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
        'title' => 'title',
        'body' => 'body'
    ]);
});

