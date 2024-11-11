<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DepartementController;
use App\Http\Controllers\DivisionController;
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
// Route::get('/create-storage-link', function () {
//     $targetFolder = base_path('storage/app/public'); // Folder tujuan
//     $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage'; // Lokasi symbolic link di public_html

//     if (file_exists($linkFolder)) {
//         return 'Link folder sudah ada.';
//     }

//     try {
//         symlink($targetFolder, $linkFolder); // Membuat symbolic link
//         return 'Symlink berhasil dibuat.';
//     } catch (Exception $e) {
//         return 'Gagal membuat symlink: ' . $e->getMessage();
//     }
// });

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
        // Divisi 
        Route::get('/divisi', [DivisionController::class, 'index'])->name('divisi.index');
        Route::get('/divisi-create', [DivisionController::class, 'create'])->name('divisi.create');
        Route::post('/divisi-create', [DivisionController::class, 'store'])->name('divisi.store');
        Route::get('/divisi-edit/{division}', [DivisionController::class, 'edit'])->name('divisi.edit');
        Route::put('/divisi-edit/{division}', [DivisionController::class, 'update'])->name('divisi.update');
        Route::delete('/divisi-delete/{division}', [DivisionController::class, 'destroy'])->name('divisi.destroy');
        // Departement
        Route::get('/departement-list', [DepartementController::class, 'list'])->name('departement.list');
        Route::get('/departement-create', [DepartementController::class, 'create'])->name('departement.create');
        Route::post('/departement-create', [DepartementController::class, 'store'])->name('departement.store');
        Route::get('/departement-edit/{departement}', [DepartementController::class, 'edit'])->name('departement.edit');
        Route::put('/departement-edit/{departement}', [DepartementController::class, 'update'])->name('departement.update');
        Route::delete('/departement-delete/{departement}', [DepartementController::class, 'destroy'])->name('departement.destroy');
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
