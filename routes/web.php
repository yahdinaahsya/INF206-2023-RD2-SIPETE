<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManageTextileController;
use App\Models\TableUserModel;
use App\Models\TableTextilModel;
use App\Http\Controllers\KelolaDonasiController;
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
    return view('landingpage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin',[AdminController::class, 'index'])->name('admin');
Route::get('/manage-user',[ManageUserController::class, 'index'])->name('manage-user');
Route::get('/kelola-donasi',[KelolaDonasiController::class,'index'])->name('kelola-donasi');
Route::get('/manage-textil',[ManageTextileController::class, 'index'])->name('manage-textil');
Route::get('/create-user',[ManageUserController::class, 'create'])->name('create-user');
Route::get('/create-textil',[ManageTextileController::class, 'create'])->name('create-textil');
Route::post('/simpan-user',[ManageUserController::class, 'store'])->name('simpan-user');
Route::post('/simpan-textil',[ManageTextileController::class, 'store'])->name('simpan-textil');

