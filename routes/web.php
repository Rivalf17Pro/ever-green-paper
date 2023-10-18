<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;

use Illuminate\Support\Facades\Route;
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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');
Route::get('/welcome/{post}', [WelcomeController::class, 'show'])->name('welcome.show');
Route::get('/contact/', [ContactController::class, 'index'])->name('contact.index');
