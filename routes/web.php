<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AliefController;
// use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\PostRequest;
use App\Http\Controllers\PostController; //load controller post
use App\Http\Controllers\UserController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [AliefController::class,'home'])->name('home');
Route::get('/tentang', [AliefController::class,'tentang'])->name('tentang');
Route::get('/kontak', [AliefController::class,'kontak'])->name('kontak');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/login', [PostController::class, 'login'])->name('login');

//Form Validation
Route::post('/kontak', [AliefController::class,'formsubmit'])->name('submit');

//CRUD
Route::resource('post', PostController::class);

//login
Route::get("/login", [UserController::class, "login"])->name('login');
Route::post("/do-login", [UserController::class, "doLogin"])->name('doLogin');
Route::post("/do-logout", [UserController::class, "doLogout"])->name('doLogout');
Route::get("/sample", [UserController::class, "createSample"])->name('createSample');
