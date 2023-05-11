<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HistoryJualController extends Controller
{
    //
    public function showDataJual(){
        $data_jual = DB::table('juals')->where('id_user', Auth::user()->id)->get();
        return view('historyJual', compact('data_jual'));
    }

    public function addKonfirmasi(Request $request)
    {
        //dd($request);
        if ($request->hasFile('gambar_resi_pengiriman')) { // tambahkan kondisi untuk memeriksa apakah input gambar diisi atau tidak
            $gambar = $request->file('gambar_resi_pengiriman');

            // membuat folder baru jika belum ada
            $path = storage_path('app/public/assets/profile');
            if (!Storage::exists($path)) {
                Storage::makeDirectory($path, 0777, true, true);
            }

            // menyimpan file gambar ke direktori "public/assets/profile"
            $filename = $gambar->getClientOriginalName();
            $gambar->storeAs('public/assets/profile', $filename);
        } else {
            $filename = null; // jika input gambar tidak diisi, set nilai filename menjadi null
        }

        DB::table('konfirmasi_pengiriman')->insert([
            'id_user' => Auth::user()->id,
            'id_jual' => $request->id_jual,
            'nama_pengirim' => $request->nama_pengirim,
            'tgl_pengiriman' => $request->tanggal_pengiriman,
            'resi_pengiriman' => $request->resi_pengiriman,
            'foro_resi' => $request->filename,
        ]);
        

        return redirect()->back();
    }
}