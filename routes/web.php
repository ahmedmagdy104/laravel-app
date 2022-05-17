<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\MovieController;
use App\http\Controllers\CategoryController;
use App\http\Controllers\HomeController;
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
/* Start Route category */
Route::get('/index/category',[CategoryController::class ,'index'])->name('category.index');
Route::get('/new/category',[CategoryController::class ,'create'])->name('category.create');
Route::post('/new/category',[CategoryController::class ,'store'])->name('category.store');
Route::get('/show/category',[CategoryController::class ,'show'])->name('category.show');
Route::get('/update/category/{id}',[CategoryController::class ,'edit'])->name('category.edit');
Route::post('/update/category',[CategoryController::class ,'update'])->name('category.update');
Route::post('/destroy/category',[CategoryController::class ,'destroy'])->name('category.destroy');
/* End Route Category */ 

/* Start Route Movies */
Route::get('/home',[HomeController::class ,'index']);
Route::get('/action',[HomeController::class ,'action']);
Route::get('/drama',[HomeController::class ,'drama']);
Route::get('/comingSoon',[HomeController::class ,'comingSoon']);
Route::get('/feedback',[HomeController::class ,'feedBack']);
Route::get('/trending',[HomeController::class ,'trending']);

Route::get('/new/movie',[MovieController::class ,'create'])->name('movie.create');
Route::post('/new/movie',[MovieController::class ,'store'])->name('movie.store');
Route::get('/show/movie',[MovieController::class ,'show'])->name('movie.show');
Route::get('/update/movie',[MovieController::class ,'edit'])->name('movie.edit');
Route::post('/update/movie',[MovieController::class ,'update'])->name('movie.update');
//Route::post('/destroy/movie'.[MovieController::class ,'destroy'])->name('movie.destroy');
/* End Route Movies */

Route::get('/', function () {
    return view('empty');
});
Route::get('/dashboard/empty',function (){
    return view('empty');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
