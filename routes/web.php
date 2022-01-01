<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('/about', [IndexController::class, 'about'])->name('about');
Route::get('/contact', [IndexController::class, 'contact'])->name('contact');
Route::get('/services', [IndexController::class, 'services'])->name('services');
Route::get('/portfolio', [IndexController::class, 'portfolio'])->name('portfolio');
Route::get('/staffs', [IndexController::class, 'staffs'])->name('staffs');
Route::get('/members', [IndexController::class, 'members'])->name('members');
Route::get('/donations', [IndexController::class, 'donations'])->name('donations');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('tasks', \App\Http\Controllers\TasksController::class);

    Route::resource('staff', \App\Http\Controllers\StaffController::class);

    Route::resource('users', \App\Http\Controllers\UsersController::class);
});
