<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\Site\IndexController::class, 'index'])->name('index');
Route::get('/about_us', [App\Http\Controllers\Site\AboutUsController::class, 'index'])->name('about_us');
Route::get('/contact', [App\Http\Controllers\Site\ContactController::class, 'index'])->name('contact');

Route::post('/mail', [App\Http\Controllers\Site\GestMessageMailController::class, 'send'])->name('mail');

// lists pages routes
Route::get('/services', [App\Http\Controllers\Site\ServicesController::class, 'index'])->name('services');
Route::get('/gallery', [App\Http\Controllers\Site\GalleryController::class, 'index'])->name('gallery');
Route::get('/tours', [App\Http\Controllers\Site\ToursController::class, 'index'])->name('tours');

// article pages routes
Route::get('/service/{id}', [App\Http\Controllers\Site\ServicesController::class, 'article_page'])->name('service_page');
Route::get('/tour/{id}', [App\Http\Controllers\Site\ToursController::class, 'article_page'])->name('tour_page');

Route::fallback(function () {
    return response()->view('404', [], 404);
});