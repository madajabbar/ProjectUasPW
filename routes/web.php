<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\CustomerLoginController;
use App\Models\Article;
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

//blog routes
Route::get('/blog', [WebController::class, 'blog']);
Route::get('/blog/{id}', [WebController::class, 'content']);
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

Route::middleware('auth:customer')->group(function(){
    // Tulis routemu di sini.
    Route::get('/customer/login', [CustomerLoginController::class,'showLoginForm'])->name('customer.loginform');
    Route::get('/customer/register', [CustomerLoginController::class,'showRegisterForm'])->name('customer.registerform');
    Route::post('/customer/login', [CustomerLoginController::class,'login'])->name('customer.login');
    Route::post('/customer/register', [CustomerLoginController::class,'register'])->name('customer.register');
    Route::get('/customer/home', [CustomerLoginController::class,'index'])->middleware('auth:customer');
    Route::get('/customer/logout', [CustomerLoginController::class,'logout'])->name('customer.logout');
  });

