<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

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

Route::get('/', function () {
    return view('welcome');
});


// Display the form
Route::get('/form', [App\Http\Controllers\FormController::class, 'showForm'])->name('form');

// Process the form submission
Route::post('/form', [FormController::class, 'processForm'])->name('form.submit');


Route::post('/form-submit', [FormController::class, 'submit'])->name('form.submit');

Route::get('/test-form', function () {
    return view('test-form');
})->name('test-form');
