<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArchiveController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\admin\ProfileController;
use App\Http\Controllers\admin\AdminController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about', [AboutController::class, 'index'])->name('about.index');
Route::get('/archive', [ArchiveController::class, 'index'])->name('archive.index');
Route::get('/business', [BusinessController::class, 'index'])->name('business.index');


Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/blog-list', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile', [ProfileController::class, 'profileUpdate'])->name('profile.update');
    Route::get('/adminList', [AdminController::class, 'index'])->name('adminList');


    Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
});

Route::get('/admin/login', [LoginController::class, 'index'])->name('login');
Route::post('/admin/login', [LoginController::class, 'login'])->name('admin.login.post');