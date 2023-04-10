<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ManageTextileController;
use App\Models\TableUserModel;
use App\Models\TableTextilModel;
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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});

// Route::get('/admin', function(){
//     return view('admin.index');
// });
// Route::get('/manage-user', function(){
//     return view('admin.manageUser');
// });

// Route::get('/manage-textil', function(){
//     return view('admin.manageTextil');
// });

Route::get('/admin',[AdminController::class, 'index'])->name('admin');
Route::get('/manage-user',[ManageUserController::class, 'index'])->name('manage-user');
Route::get('/manage-textil',[ManageTextileController::class, 'index'])->name('manage-textil');
Route::get('/create-user',[ManageUserController::class, 'create'])->name('create-user');
Route::get('/create-textil',[ManageTextileController::class, 'create'])->name('create-textil');
Route::post('/simpan-user',[ManageUserController::class, 'store'])->name('simpan-user');
Route::post('/simpan-textil',[ManageTextileController::class, 'store'])->name('simpan-textil');



// Route::get('/manage-textil', function () {
//     $dataUser = app(ManageUserController::class)->index();
//     $dataTextile = app(ManageTextileController::class)->index();
//     return view('admin.manageTextil', compact('dataUser', 'dataTextile'));
// })->name('manage-textil');
