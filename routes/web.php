<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'homepage'])->name('homepage');
Route::get('/about', [App\Http\Controllers\HomeController::class, 'about'])->name('about');
Route::get('/menu', [App\Http\Controllers\HomeController::class, 'menu'])->name('menu');
Route::get('/contact', [App\Http\Controllers\HomeController::class, 'contact'])->name('contact');
Route::get('/booking', [App\Http\Controllers\HomeController::class, 'booking'])->name('booking');
Route::post('/add_send_contact_form', [App\Http\Controllers\HomeController::class, 'add_send_contact_form'])->name('add_send_contact_form');
Route::post('/add_subscriber', [App\Http\Controllers\HomeController::class, 'add_subscriber'])->name('add_subscriber');



Auth::routes();
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'root'])->name('root');
//Route::get('/login', [App\Http\Controllers\AdminController::class, 'root'])->name('root');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin-main', [AdminController::class, 'main'])->name('admin_main');


});
