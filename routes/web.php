<?php
// routes/web.php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/', function(){
    return view('index');
});

// Route to display the form
Route::get('/contact', [AdminController::class, 'showForm'])->name('contact');

// Route to handle form 
Route::post('/form-submit', [AdminController::class, 'submitForm'])->name('form.submit');

Route::get('/admin/data', [AdminController::class, 'show'])->name('data.show');
Route::get('/admin/data/delete/{id}', [AdminController::class, 'destroy'])->name('data.delete');