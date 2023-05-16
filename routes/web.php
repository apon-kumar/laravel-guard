<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\merchantController;
use App\Http\Controllers\customerController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/merchant-login', [merchantController::class, 'showLogin']);
Route::post('/merchant-login', [merchantController::class, 'login'])->name('merchant.login');
Route::get('/merchant-logout', [merchantController::class, 'logout'])->name('merchant.logout');


Route::get('/customer-login', [customerController::class, 'showLogin']);
Route::post('/customer-login', [customerController::class, 'login'])->name('customer.login');
Route::get('/customer-logout', [customerController::class, 'logout'])->name('customer.logout');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
