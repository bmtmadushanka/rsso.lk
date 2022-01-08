<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PayPalPaymentController;

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
Route::get('/member-register', [IndexController::class, 'register'])->name('member-register');
Route::get('/need-help', [IndexController::class, 'help'])->name('need-help');
Route::get('/vision', [IndexController::class, 'vision'])->name('vision');


Route::post('handle-payment', [PayPalPaymentController::class,'handlePayment'])->name('make.payment');

Route::get('cancel-payment', [PayPalPaymentController::class,'paymentCancel'])->name('cancel.payment');

Route::get('payment-success', [PayPalPaymentController::class,'paymentSuccess'])->name('success.payment');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => 'auth'], function () {
    Route::resource('tasks', \App\Http\Controllers\TasksController::class);

    Route::resource('staff', \App\Http\Controllers\StaffController::class);

    Route::resource('project-category', \App\Http\Controllers\ProjectCategoryController::class);

    Route::resource('material', \App\Http\Controllers\MaterialController::class);

    Route::resource('funds', \App\Http\Controllers\FundsController::class);

    Route::resource('ourdonations', \App\Http\Controllers\DonationController::class);

    Route::resource('balance-report', \App\Http\Controllers\ReportController::class);

    Route::resource('users', \App\Http\Controllers\UsersController::class);
});
