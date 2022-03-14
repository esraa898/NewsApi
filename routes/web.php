<?php

use App\Models\category;
use App\Models\comment;
use App\Models\post;
use App\Models\User;
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
    return view('welcome');
});


Route::get('/Categories', function () {
    // return category::all();



  $user= User::find(15);
  return $user->posts;

    // $post = post::with('category')->find(150);
    // return $post;
});
Route::get('/posts', function () {
    return post::all();
});
Route::get('/comments', function () {
    return comment::all();
});

 