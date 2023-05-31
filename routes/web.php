<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    return view('welcome');
});
Route::get('/admin', function(){
    return view('backend.layouts.master');
});
Route::get('/home', [HomeController::class, 'home'])->name('home');
Route::get('/category', [CategoryController::class, 'index'])->name('category.list');
Route::get('/category/show', [CategoryController::class, 'show'])->name('category.show');

// Route::get('/category/create', [CategoryController::class, 'create'] );

// Route::get('/hello',[HomeController::class,  'index'] );
