<?php

namespace App\Http\Controllers;

use App\Models\TableKoinModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KoinController extends Controller
{
    public function index()
    {

        // ambil data koin dari database
        $datakoin = TableKoinModel::all();

        // Tampilkan view kelolaKoin dan passing data koin ke dalam view
        return view('admin.kelolaKoin', ['datakoin' => $datakoin]);
    }

    public function edit()
    {
        $datakoin = TableKoinModel::all();
        return view('admin.editKoin', compact('datakoin'));
    }


    public function update(Request $request)
    {
        // Ambil data koin dari database
        $koin = TableKoinModel::where('id_user', Auth::user()->id)->first();

        // Periksa apakah data koin sudah ada di database
        if (!$koin) {
            // Jika belum, buat data koin baru untuk user ini
            $koin = new TableKoinModel();
            $koin->id_user = Auth::user()->id;
            $koin->saldo_koin = 0;
        }

        // Tambah saldo koin dengan jumlah yang diinputkan
        $koin->saldo_koin += $request->input('jumlah_koin');

        // Simpan data koin ke dalam database
        $koin->save();

        // Simpan data koin ke dalam session
        session()->put('datakoin', $koin);

        // Redirect ke halaman sebelumnya
        return redirect()->back();
    }

    public function tambahKoin(int $id_user, int $jumlah_koin)
    {
        // Ambil data koin dari database
        $koin = TableKoinModel::where('id_user', $id_user)->first();

        // Periksa apakah data koin sudah ada di database
        if (!$koin) {
            // Jika belum, buat data koin baru untuk user ini
            $koin = new TableKoinModel();
            $koin->id_user = $id_user;
            $koin->saldo_koin = $jumlah_koin;
        } else {
            // Jika sudah, tambahkan saldo koin
            $koin->saldo_koin += $jumlah_koin;
        }

        // Simpan data koin ke dalam database
        $koin->save();
    }
}