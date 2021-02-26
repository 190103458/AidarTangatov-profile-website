<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use Illuminate\Support\Facades\DB;

use App\Models\post;
=======
>>>>>>> 45fa2f9c650f3421e1059df9a055a2afac5822c2

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
    return view('main');
});

<<<<<<< HEAD
Route::get('/post', function () {
    $str = post::find(1);
    return $str;
});

=======
>>>>>>> 45fa2f9c650f3421e1059df9a055a2afac5822c2
Route::get('/work1', function () {
    return view('work1 ');
})->name('work1');

Route::get('/work2', function () {
    return view('work2 ');
})->name('work2');

<<<<<<< HEAD

Route::get('/post/create', function () {
    DB::table("post")->insert([
        'title' => 'title',
        'body' => 'body'
    ]);
});

=======
>>>>>>> 45fa2f9c650f3421e1059df9a055a2afac5822c2
