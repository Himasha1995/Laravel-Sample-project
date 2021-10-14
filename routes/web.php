<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\loginController;
use App\Http\Controllers\User\registrationController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Api\ProductController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



//Route::get('/login',[loginController::class,'index'])->name('login');
//Route::post('/login/process',[loginController::class,'process'])->name('dashboard.login.process');
//Route::get('/logout',[loginController::class,'logout'])->name('dashboard.logout');
Route::get('/dashboard',[loginController::class,'dashboard'])->name('dashboard.index');

//Route::get('/registration', [RegistrationController::class,'registration'])->name('registration');
//Route::post('/registration/process', [RegistrationController::class,'process'])->name('dashboard.registration.process');




//Route::get('/dashboard/category/create', [CategoryController::class,'create'])->name('category.create');
//Route::post('/dashboard/category/store', [CategoryController::class,'store'])->name('category.store');

//Route::get('/dashboard/category/{category}/edit', [CategoryController::class,'edit'])->name('category.edit');

//Route::delete('/dashboard/category/destroy{category}', [CategoryController::class,'destroy'])->name('category.destroy');






