<?php
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\ResetPasswordController;
use App\Http\Controllers\Admin\Auth\ForgotPasswordController;


Route::get('/admin/Dashboard', [App\Http\Controllers\Admin\Auth\Dashboard::class, 'index'])->name('user.Dashboard');  // auth library  //middleware

Route::get('/home', [App\Http\Controllers\Auth\HomeController::class, 'index'])->name('Dashboard');  // auth library

//RegisterController
Route::post('/adminreg',[App\Http\Controllers\Admin\Auth\RegisterController::class,'reg'])->name('Admin.register.post');   // request

Route::get('/admin_reg',[App\Http\Controllers\Admin\Auth\RegisterController::class,'showRegistrationForm'])->name('Admin.register');  // Form



Route::Get('/admin/ForgetPassword',[App\Http\Controllers\Admin\Auth\ForgotPasswordController::class,'showLinkRequestForm'])->name('Admin.ForgetPassword');   // request  // middleware


Route::POST('/admin/ResetEmail',[App\Http\Controllers\Admin\Auth\ForgotPasswordController::class,'sendResetLinkEmail'])->name('Admin.ResetEmail');   // request  // middleware



Route::Get('/admin/Reset_Password/{token}',[App\Http\Controllers\Admin\Auth\ResetPasswordController::class,'showResetForm'])->name('Admin.ResetPassword');   // request  // middleware
Route::Post('/admin/ResetPassword/',[App\Http\Controllers\Admin\Auth\ResetPasswordController::class,'reset'])->name('Admin.password.update');   // request  // middleware

//LoginController
Route::Get('/admin/Log',[App\Http\Controllers\Admin\Auth\LoginController::class,'customLogin'])->name('Admin.Login.post');   // request  // middleware

Route::get('/admin/Log_in',[App\Http\Controllers\Admin\Auth\LoginController::class,'showLoginForm'])->name('Admin.Login');  // Form

Route::get('/admin/LogOut',[App\Http\Controllers\Admin\Auth\LoginController::class,'logout'])->name('Admin.LogOut');

