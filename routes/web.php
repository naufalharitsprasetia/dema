<?php

use App\Http\Controllers\AuthController;
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
// php artisan storage:link untuk hosting
Route::get('/create-storage-link', function () {
    $targetFolder = base_path('storage/app/public'); // Folder tujuan
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage'; // Lokasi symbolic link di public_html

    if (file_exists($linkFolder)) {
        return 'Link folder sudah ada.';
    }

    try {
        symlink($targetFolder, $linkFolder); // Membuat symbolic link
        return 'Symlink berhasil dibuat.';
    } catch (Exception $e) {
        return 'Gagal membuat symlink: ' . $e->getMessage();
    }
});

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [HomeController::class, 'about'])->name('home.about');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::get('/faq', [HomeController::class, 'faq'])->name('home.faq');

Route::middleware('guest')->group(
    function () {
        Route::get('/login', [AuthController::class, 'login'])->name('login');
        Route::post('/login', [AuthController::class, 'authenticate'])->name('authenticate');
    }
);
// Auth
Route::middleware('auth')->group(
    function () {
        // admin
        Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
        Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
        // Blog
        Route::get('/blog-list', [BlogController::class, 'list'])->name('blog.list');
        Route::get('/blog-create', [BlogController::class, 'create'])->name('blog.create');
        Route::post('/blog-create', [BlogController::class, 'store'])->name('blog.store');
        Route::get('/blog-edit/{blog}', [BlogController::class, 'edit'])->name('blog.edit');
        Route::put('/blog-edit/{blog}', [BlogController::class, 'update'])->name('blog.update');
        Route::delete('/blog-delete/{blog}', [BlogController::class, 'destroy'])->name('blog.destroy');
    }
);

// Artikel - Blog
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{blog}', [BlogController::class, 'show'])->name('blog.show');

// Departemen
Route::get('/departement', [DepartementController::class, 'index'])->name('departement.index');

// UKM
Route::get('/ukm', [UKMController::class, 'index'])->name('ukm.index');

// HMP

// Variabel Website DEMA

// Redirect
Route::get('{any}', [HomeController::class, 'index'])->name('index');