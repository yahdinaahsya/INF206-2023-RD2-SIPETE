<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FotoProfilAdminController;
use App\Http\Controllers\ManageTextileController;
use App\Models\TableUserModel;
use App\Models\TableTextilModel;
use App\Http\Controllers\KelolaDonasiController;
use App\Http\Controllers\KelolaKoinController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\StatistikaGeograpiIndonesiaController;
use App\Http\Middleware\CheckRole;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\JualController;
use App\Http\Controllers\DonasiController;
use App\Http\Controllers\OlahDataStatistikController;
use App\Models\OlahData;
use App\Http\Controllers\HistoryDonasiController;
use App\Http\Controllers\KoinController;
use App\Http\Controllers\KritiksaranController;
use App\Http\Controllers\PoinSipeteController;
use App\Http\Controllers\HistoryJualController;


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

Route::get('/profil', [ProfileController::class, 'showCountDonation']);

Route::get('/redeemkoin', [PoinSipeteController::class, 'index'])->name('redeemkoin.index');
Route::get('/redeemkoin/{id_user}', [PoinSipeteController::class, 'show'])->name('redeemkoin.show');
Route::post('/redeemkoin', [PoinSipeteController::class, 'store'])->name('redeemkoin.store');


Route::get('/pengelolaan', function () {
    return view('pengelolaan');
});

Route::get('/halamanjual', function () {
    return view('halamanjual');
});

Route::get('/halamandonasi', function () {
    return view('halamandonasi');
});

Route::get('/kritiksaran', function () {
    return view('kritikSaran');
});

Route::get('/halamantentang', function () {
    return view('halamantentang');
});

Route::get('/historyDonasi', [HistoryDonasiController::class, 'showDataDonasi']);
Route::post('/historyDonasi/addKonfirmasi', [HistoryDonasiController::class, 'addKonfirmasi']);

Route::get('/historyJual', [HistoryJualController::class, 'showDataJual']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/simpan-jual', [JualController::class, 'store'])->name('simpan-jual');
    Route::post('/simpan-Donasi', [DonasiController::class, 'store'])->name('simpan-Donasi');
    Route::post('/simpan-Kritik', [KritiksaranController::class, 'store'])->name('simpan-Kritik');

    Route::middleware([CheckRole::class . ':user'])->group(function () {

    });


    Route::middleware([CheckRole::class . ':admin'])->group(function () {
        Route::get('/admin', [AdminController::class, 'index'])->name('admin');
        // melihat data user
        Route::get('/manage-user', [ManageUserController::class, 'index'])->name('manage-user');
        // menampilkan gambar profil
        Route::get('/manage-foto-profil', [FotoProfilAdminController::class, 'index'])->name('manage-foto-profil');
        Route::get('/kelola-donasi', [DonasiController::class, 'index'])->name('kelola-donasi');
        Route::get('/manage-textil', [JualController::class, 'index'])->name('manage-textil');
        Route::get('/kelola-koin', [KelolaKoinController::class, 'index'])->name('kelola-koin');
        Route::get('/kritik-saran', [KritiksaranController::class, 'index'])->name('kritik-saran');
        Route::get('/create-user', [ManageUserController::class, 'create'])->name('create-user');
        Route::get('/create-textil', [ManageTextileController::class, 'create'])->name('create-textil');
        // create data user
        Route::post('/simpan-user', [ManageUserController::class, 'store'])->name('simpan-user');
        // tampilkan data user
        Route::get('/tampilkanDataUser/{id}', [ManageUserController::class, 'tampilkanDataUser'])->name('tampilkanDataUser');
        // update data user
        Route::post('/updateDataUser/{id}', [ManageUserController::class, 'updateDataUser'])->name('updateDataUser');
        // delete data user
        Route::get('/deleteDataUser/{id}', [ManageUserController::class, 'deleteDataUser'])->name('deleteDataUser');
        // cari user
        Route::get('/manage-user/cari', [ManageUserController::class, 'cari'])->name('cari');
        Route::post('/simpan-textil', [ManageTextileController::class, 'store'])->name('simpan-textil');
        Route::get('/search', [SearchController::class, 'search'])->name('search');
        Route::post('/search', [SearchController::class, 'search'])->name('search.post');
        Route::get('/count', function () {
            $count = DB::table('users')->count(); // Hitung jumlah data di dalam tabel
            return response()->json(['count' => $count]); // Mengembalikan respons dalam bentuk JSON
        });
        Route::get('/countPenjualan', function () {
            $count = DB::table('juals')->count(); // Hitung jumlah data di dalam tabel
            return response()->json(['count' => $count]); // Mengembalikan respons dalam bentuk JSON
        });
        Route::get('/countDonasi', function () {
            $count = DB::table('donasis')->count(); // Hitung jumlah data di dalam tabel
            return response()->json(['count' => $count]); // Mengembalikan respons dalam bentuk JSON
        });
        // menampilkan statistik geograpy indonesia
        Route::get('/statistika-geograpy', [StatistikaGeograpiIndonesiaController::class, 'index'])->name('statistika-geograpy');
        Route::get('/olah-data', [OlahDataStatistikController::class, 'index'])->name('olah-data');
        Route::get('/olah-data/{id}/edit', [OlahDataStatistikController::class, 'edit'])->name('olah-data.edit');
        Route::post('/olah-data/{id}/update', [OlahDataStatistikController::class, 'update'])->name('olah-data.update');
        Route::get('/data', function () {
            $data = DB::table('olahData')->get(); // Ambil data dari tabel data
            return view('data', ['data' => $data]); // Kirim data ke dalam view data.blade.php
        });
        Route::resource('ratings', 'App\Http\Controllers\OlahDataStatistikController')->only(['index', 'update']);

        // update coin
        // Menampilkan daftar koin
        Route::get('/kelola-koin', [KoinController::class, 'index'])->name('koin.index');
        // Menampilkan form untuk mengubah jumlah koin
        Route::get('/kelola-koin/{id}/edit', [KoinController::class, 'edit'])->name('coin-edit');
        // Mengupdate jumlah koin
        Route::put('/kelola-koin/{id}', [KoinController::class, 'update'])->name('coin-update');
    });
});

require __DIR__ . '/auth.php';