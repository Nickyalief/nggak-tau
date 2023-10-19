<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AliefController;
// use Illuminate\Foundation\Http\FormRequest;
use App\Http\Requests\PostRequest;
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

//Form Validation
Route::post('/kontak', [AliefController::class,'formsubmit'])->name('submit');

//CRUD
