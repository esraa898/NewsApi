<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\UserController;
use App\Http\Resources\UsersResource;
use Database\Factories\CategoryFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// user routes 
Route::get('/authors',[UserController::class,'index']);
Route::get('/author/{id}',[UserController::class,'show']);
Route::get('/posts/author/{id}',[UserController::class,'posts']);
Route::get('/comments/author/{id}',[UserController::class,'comments']);



// categories routes 
Route::get('categories',[CategoryController::class,'index']);