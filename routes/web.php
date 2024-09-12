<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UKMController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::get('/faq', [HomeController::class, 'faq'])->name('home.faq');

// Artikel - Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

// Departemen
Route::get('/departement', [DepartementController::class, 'index'])->name('departement.index');

// UKM
Route::get('/ukm', [UKMController::class, 'index'])->name('ukm.index');

// HMP

// Variabel Website DEMA