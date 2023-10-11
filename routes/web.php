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

Route::get('/addArticle', [\App\Http\Controllers\Controller::class, 'addArticle'])->name('addArticle');

Route::post('/addArticle', [\App\Http\Controllers\Controller::class, 'addArticlePost'])->name('addArticle');

Route::post('/article/{id}/delete', [\App\Http\Controllers\Controller::class, 'articleDelete'])->name('articleDelete');

Route::post('/comments', [\App\Http\Controllers\CommentsController::class, 'index'])->name('comments');

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'index'])->name('login');

Route::post('/login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');

Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
