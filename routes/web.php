<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, "showHome"]);

Route::get('/services/{id}', [ServiceController::class, 'show'])->name('services.show');

Route::get("/services", [PagesController::class, "showService"]);

Route::get("/about", [PagesController::class, "showAbout"]);

Route::get("/contact", [PagesController::class, "showContact"])->name('contact.show');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

Route::post('/no-csrf-test', function () {
    return 'Form submitted!';
});
