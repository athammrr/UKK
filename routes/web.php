<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CobaController;
use App\Http\Controllers\FaHotelController;
use App\Http\Controllers\FaKamarController;
use App\Http\Controllers\KamarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ResepsionisController;
use App\Http\Controllers\UserController;
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

Route::get('/home', function () {
    return view('home');
})->name('home');


Route::get('/dashboard', [AdminController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');


Route::resource('admin', AdminController::class);
Route::resource('resepsionis', ResepsionisController::class);
Route::resource('kamar', KamarController::class);
Route::resource('fakamar', FaKamarController::class);
Route::resource('fahotel', FaHotelController::class);

Route::resource('user', UserController::class);
Route::get('/kmr', [UserController::class, 'kamar'])->name('user.kamar');
Route::get('/fasilitas', [UserController::class, 'fasilitas'])->name('user.fa');

require __DIR__.'/auth.php';
