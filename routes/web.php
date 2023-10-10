<?php

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

Route::get('/', [\App\Http\Controllers\Controller::class, 'index'])->name('home');

Route::get('/article/{id}', [\App\Http\Controllers\Controller::class, 'article'])->name('article');

Route::post('/comments', [\App\Http\Controllers\CommentsController::class, 'index'])->name('comments');

Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'index'])->name('contact');
