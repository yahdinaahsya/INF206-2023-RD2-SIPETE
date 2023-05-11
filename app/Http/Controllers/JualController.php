<?php

namespace App\Http\Controllers;

use App\Models\TableKoinModel;
use App\Models\Jual;
use App\Http\Requests\StorejualRequest;
use App\Http\Requests\UpdatejualRequest;

use Illuminate\Support\Facades\Auth;

class JualController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $datajual = Jual::all();
        return view('admin.manageTextil', compact('datajual'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorejualRequest $request)
    {
        jual::create([
            'id_user' => Auth::user()->id,
            'nama' => $request->name,
            'alamat' => $request->alamat,
            'tgljual' => $request->tanggal,
            'email' => $request->email,
            'no_hp' => $request->telepon,
            'cr_kirim' => $request->pengiriman,
        ]);

        return redirect('/halamanjual')->with('success', 'Data Berhasil Ditambahkan');
    }
    //selesai
    public function selesai($id){
        $donasi = Jual::find($id);
        if ($donasi->status == 'dalam proses') {
            $donasi->status = 'selesai';
            $donasi->save();
        }
        return redirect()->back()->with('success', 'Penjualan Telah Selesai');
    }

    // terima
    public function terima($id)
    {
        $donasi = Jual::find($id);
        if ($donasi->status == 'dalam antrian') {
            $donasi->status = 'dalam proses';
            $donasi->save();

            // Ambil data koin dari database
            $koin = TableKoinModel::where('id_user', Auth::user()->id)->first();
            // Periksa apakah data koin sudah ada di database
            if (!$koin) {
                // Jika belum, buat data koin baru untuk user ini
                $koin = new TableKoinModel();
                $koin->id_user = Auth::user()->id;
                $koin->saldo_koin = 100;
            } else {
                // Jika sudah, tambahkan saldo koin
                $koin->saldo_koin += 100;
            }

            // Simpan data koin ke dalam database
            $koin->save();

            // Simpan data koin ke dalam session
            session()->put('datakoin', $koin);

            return redirect()->back()->with('success', 'Pesanan telah diterima.');
        } else {
            return redirect()->back()->with('error', 'Pesanan sudah diterima sebelumnya.');
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(jual $jual)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(jual $jual)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatejualRequest $request, jual $jual)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $jual = Jual::where('id', $id)->first();
        if ($jual) {
            $jual->delete();
        }
        return redirect()->back();
    }
}