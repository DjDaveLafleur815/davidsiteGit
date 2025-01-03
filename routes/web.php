<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\LocaleController;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', [Controller::class, 'index'])->name('main.home');
Route::get('/a-propos', [Controller::class, 'about'])->name('app.about');
Route::get('/portfolio', [Controller::class, 'portfolio'])->name('app.portfolio');
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.show');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');
Route::get('locale/{lang}', [LocaleController::class,'setLocale']);
