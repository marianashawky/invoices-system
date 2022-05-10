<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\AdminController;
use  App\Http\Controllers\InvoicesController;
use  App\Http\Controllers\SectionsController;



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
    return view('auth.login');
});

Auth::routes(['register'=> false]);
// Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/invoices',[InvoicesController::class,'index']);
Route::get('/sections',[SectionsController::class,'index']);
Route::post('sectionsstore',[SectionsController::class,'store'])->name('section.store');;

Route::get('/{page}',[AdminController::class, 'index']);

