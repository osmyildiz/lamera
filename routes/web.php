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
Route::post('/book_a_table_form', [App\Http\Controllers\HomeController::class, 'book_a_table_form'])->name('book_a_table_form');




Auth::routes();
Route::get('/admin', [App\Http\Controllers\AdminController::class, 'root'])->name('root');
//Route::get('/login', [App\Http\Controllers\AdminController::class, 'root'])->name('root');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin-main', [AdminController::class, 'main'])->name('admin_main');
    Route::get('/admin-contact', [AdminController::class, 'contact'])->name('admin_contact');
    Route::post('/contact-update', [AdminController::class, 'contact_update'])->name('admin.update_contact');
    Route::get('/admin-contactforms', [AdminController::class, 'contactforms'])->name('admin.contactforms');
    Route::get('/admin-subscribers', [AdminController::class, 'subscribers'])->name('admin.subscribers');
    Route::get('/admin-bookings', [AdminController::class, 'bookings'])->name('admin.bookings');

    Route::get('/admin-about', [AdminController::class, 'about'])->name('admin_about');
    Route::post('/about-update', [AdminController::class, 'about_update'])->name('admin.update_about');

    Route::get('/admin-testimonial', [AdminController::class, 'testimonial'])->name('admin_testimonial');
    Route::post('/add-testimonial', [AdminController::class, 'add_testimonial'])->name('add_testimonial');
    Route::get ('/testimonial-edit/{id}', [AdminController::class, 'testimonial_edit'])->name('testimonial.edit');
    Route::post('/testimonial-update/{id}', [AdminController::class, 'testimonial_update'])->name('testimonial.update');
    Route::delete('/testimonial-delete/{id}', [AdminController::class, 'testimonial_delete'])->name('testimonial.delete');

    Route::get('/edit-menu/{id}', [AdminController::class, 'edit_menu'])->name('menu.edit');
    Route::post('/update-menu/{id}', [AdminController::class, 'update_menu'])->name('menu.update');
    Route::get('/admin-menu/{id}', [AdminController::class, 'admin_menu'])->name('admin-menu');
    Route::post('/add-menu', [AdminController::class, 'add_menu'])->name('add_menu');
    Route::get ('/delete-menu/{id}', [AdminController::class, 'delete_menu'])->name('menu.delete');
    Route::post('/add-foodtype', [AdminController::class, 'add_foodtype'])->name('add_foodtype');
    Route::get('/edit-foodtype/{id}', [AdminController::class, 'edit_foodtype'])->name('foodtype.edit');
    Route::get ('/delete-foodtype/{id}', [AdminController::class, 'delete_foodtype'])->name('foodtype.delete');
    Route::post('/update-foodtype/{id}', [AdminController::class, 'update_foodtype'])->name('foodtype.update');




    Route::get('/admin-whoweare', [AdminController::class, 'whoweare'])->name('admin_whoweare');

    Route::get('/whatweoffer-client', [AdminController::class, 'whatweoffer_client'])->name('admin_whatweofferclient');
    Route::get('/packages-client', [AdminController::class, 'packages_client'])->name('packages_client');
    Route::post('/whatweofferclient-update', [AdminController::class, 'whatweofferclient_update'])->name('admin.update_whatweofferclient');


    Route::get('/whatweoffer-artist', [AdminController::class, 'whatweoffer_artist'])->name('admin_whatweofferartist');
    Route::get('/packages-artist', [AdminController::class, 'packages_artist'])->name('artist_packages');
    Route::post('/package-update/{id}', [AdminController::class, 'packages_update'])->name('update_packages');
    Route::post('/whatweofferartist-update', [AdminController::class, 'whatweofferartist_update'])->name('admin.update_whatweofferartist');


    Route::get('/admin-joinus', [AdminController::class, 'joinus'])->name('admin_joinus');
    Route::get('/admin-bookartist', [AdminController::class, 'bookartist'])->name('admin_bookartist');

    Route::get('/admin-slider', [AdminController::class, 'slider'])->name('admin_slider');
    Route::post('/add-slider', [AdminController::class, 'add_slider'])->name('add_slider');
    Route::get ('/slider-edit/{id}', [AdminController::class, 'slider_edit'])->name('slider.edit');
    Route::post('/slider-update/{id}', [AdminController::class, 'slider_update'])->name('slider.update');
    Route::delete('/slider-delete/{id}', [AdminController::class, 'slider_delete'])->name('slider.delete');

    Route::get('/admin-photos', [AdminController::class, 'admin_photos'])->name('admin-photos');
    Route::post('/update-photo/{id}', [AdminController::class, 'update_photo'])->name('photo.update');
    Route::get ('/edit-photo/{id}', [AdminController::class, 'edit_photo'])->name('photo.edit');
    Route::post('/add-photo', [AdminController::class, 'add_photos'])->name('photos.add');
    Route::get('/delete-photo/{id}', [AdminController::class, 'delete_photo'])->name('photo.delete');
    Route::post('/add-photo-category', [AdminController::class, 'add_photo_category'])->name('photo_category.add');
    Route::get('/edit-photocategory/{id}', [AdminController::class, 'edit_photocategory'])->name('photocategory.edit');
    Route::post('/update-photocategory/{id}', [AdminController::class, 'update_photocategory'])->name('photocategory.update');


    Route::get('/admin-menu/{id}', [AdminController::class, 'admin_menu'])->name('admin-menu');
    Route::post('/add-menu', [AdminController::class, 'add_menu'])->name('add_menu');
    Route::get ('/delete-menu/{id}', [AdminController::class, 'delete_menu'])->name('menu.delete');
    Route::post('/add-foodtype', [AdminController::class, 'add_foodtype'])->name('add_foodtype');
    Route::get('/edit-foodtype/{id}', [AdminController::class, 'edit_foodtype'])->name('foodtype.edit');
    Route::get ('/delete-foodtype/{id}', [AdminController::class, 'delete_foodtype'])->name('foodtype.delete');
    Route::post('/update-foodtype/{id}', [AdminController::class, 'update_foodtype'])->name('foodtype.update');



});
