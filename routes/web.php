<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\CounsellingCOntroller;
use App\Http\Controllers\UserControllers;
use App\Http\Controllers\ArtikelController;

use Illuminate\Support\Facades\DB;


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
 
Route::get('/post', [PostController::class, 'index']);

Route::get('/', function () {
    return view('home', [
        "title" => "Mental Health Solutions"
    ]);
});

Route::get('/timeline', function () {
     return view('timeline', [
         "title" => "Timeline"
     ]);
 });

Route::get('/counselling', function () {
    return view('counselling', [
        "title" => "Counselling"
    ]);
});



Route::get('/login', [LoginController::class,'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::post('post', App\Http\Controllers\PostController::class)->name('post.store');
Route::delete('{id}/destroy', [PostController::class, 'destroy'])->name('destroy');
Route::get('/timeline', [TimelineController::class, 'index'])->middleware('auth');

Route::post('/artikel', [ArtikelController::class, 'index'])->middleware('auth');


Route::get('/counselling', [CounsellingController::class, 'index']);
Route::get('/counselling.choose/{id}', [CounsellingController::class, 'getdokter'])->name('counselling.choose');
Route::post('/counselling.choose/{id}', [CounsellingController::class, 'store']);


Route::get('/profile', [UserControllers::class, 'index']);
Route::get('/user.nama', [UserControllers::class, 'profile']);
Route::get('/user.histori', [UserControllers::class, 'histori']);
Route::get('/user.setting', [UserControllers::class, 'setting']);
Route::get('/user.edit', [UserControllers::class, 'edit']);
Route::post('/user.edit', [UserControllers::class, 'update']);


