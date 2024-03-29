<?php

use App\Http\Controllers\Admin\AdminHomeController;
use App\Http\Controllers\Admin\AdminHomePageController;
use App\Http\Controllers\Admin\AdminLoginController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Front\AboutController;
use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('front.home');
});

// Frontend 


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');





// Admin 

Route::get('/admin/home', [AdminHomeController::class, 'index'])->name('admin_home')->middleware(('admin:admin'));
Route::get('/admin/login', [AdminLoginController::class, 'index'])->name('admin_login');

Route::post('/admin/login-submit', [AdminLoginController::class, 'login_submit'])->name('admin_login_submit');

Route::get('/admin/logout', [AdminLoginController::class, 'logout'])->name('admin_logout');

Route::get('/admin/forget-password', [AdminLoginController::class, 'forget_password'])->name('admin_forget_password');

Route::post('/admin/forget-password-submit', [AdminLoginController::class, 'forget_password_submit'])->name('admin_forget_password_submit');

Route::get('/admin/reset-password/{token}/{email}', [AdminLoginController::class, 'reset_password'])->name('admin_reset_password');

Route::post('/admin/reset-password-submit', [AdminLoginController::class, 'reset_password_submit'])->name('admin_reset_password_submit');


Route::get('/admin/edit-profile', [AdminProfileController::class, 'index'])->name('admin_profile')->middleware(('admin:admin'));


Route::post('/admin/edit-profile-submit', [AdminProfileController::class, 'profile_submit'])->name('admin_profile_submit');

Route::get('/admin/home-banner', [AdminHomePageController::class, 'banner'])->name('admin_home_banner')->middleware(('admin:admin'));

Route::post('/admin/home-banner-update', [AdminHomePageController::class, 'banner_update'])->name('admin_home_banner_update')->middleware(('admin:admin'));

Route::get('/admin/home-about', [AdminHomePageController::class, 'about'])->name('admin_home_about')->middleware(('admin:admin'));

Route::post('/admin/home-about-update', [AdminHomePageController::class, 'about_update'])->name('admin_home_about_update')->middleware(('admin:admin'));
