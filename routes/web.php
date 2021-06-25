<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\WebController;
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

Route::get('/', [WebController::class,'index']);
Route::get('/about', [WebController::class,'about']);
//blog routes
Route::get('/blog', [WebController::class, 'blog']);
Route::get('/blog/{id}', [WebController::class, 'content']);
Route::post('/blog/comment', [WebController::class, 'addComment']);
//crud article
Route::post('/article/input', [ArticleController::class,'create']);
Route::get('/article', [ArticleController::class, 'index']);
Route::put('/article/update/{id}', [ArticleController::class, 'update']);
Route::get('/article/edit/{id}',[ArticleController::class, 'edit']);
Route::get('/article/delete/{id}', [ArticleController::class, 'delete']);
//crud tags
Route::get('/tag', [TagController::class, 'index']);
Route::post('/tag/input', [TagController::class,'create']);
Route::get('/tag', [TagController::class, 'index']);
Route::post('/tag/update', [TagController::class, 'update']);

Route::get('/admin/logout',[ArticleController::class,'logout']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


