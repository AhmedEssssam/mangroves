<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::post('/contact/send', [ContactController::class, 'send'])->name('contact.send');

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
