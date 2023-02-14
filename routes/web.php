<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DishesController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [PagesController::class, 'welcome'])->name('welcome');
Route::resource('/menu',DishesController::class);

Route::middleware(['auth'])->group(function () {
    Route::get('profile',[ProfileController::class,'index'])->name('profile');
    Route::post('profile/{user}',[ProfileController::class,'update'])->name('profile.update');
  });



Auth::routes();

Route::get('/welcome', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
