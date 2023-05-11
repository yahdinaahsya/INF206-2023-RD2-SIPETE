<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\TableKoinModel;
use App\Models\BarangModel;

class PoinSipeteController extends Controller
{
    public function index()
    {
        $user = auth()->user(); // Ambil user yang sedang login
        $saldo_koin = TableKoinModel::where('id_user', $user->id)->value('saldo_koin'); // Ambil saldo koin milik user yang sedang login
        if (!$saldo_koin) {
            $saldo_koin = 0;
        }
        $databarang = BarangModel::all();
        return view('redeemkoin', compact('saldo_koin', 'databarang'));
    }

    public function showRedeemForm()
    {
        $databarang = BarangModel::all();
        return view('redeemkoin', compact('databarang'));
    }

    public function show($id_user)
    {
        $user = TableKoinModel::find($id_user);
        $saldo_koin = $user->saldo_koin;

        return view('redeemkoin', ['user' => $user, 'saldo_koin' => $saldo_koin]);
    }



    public function store(Request $request)
    {
        // validasi data yang diterima dari form
        $validated = $request->validate([
            'id_user' => 'required',
            'poin' => 'required|integer|min:0',
        ]);

        // mencari data user berdasarkan id
        $user = TableKoinModel::find($validated['id_user']);
        // menambahkan poin pada data user yang ditemukan
        $user->poin += $validated['poin'];
        $user->save();
        // mencari data barang berdasarkan id
        $barang = BarangModel::find($validated['id']);

        // mencari data user yang sedang login
        $user = auth()->user();
        // jika koin user cukup untuk menukar barang
        if ($user->table_koin_model->saldo_koin >= $barang->harga) {
            // mengurangi saldo koin user
            $user->table_koin_model->saldo_koin -= $barang->harga;
            $user->table_koin_model->save();

            // redirect kembali ke halaman redeemkoin
            return redirect()->route('redeemkoin.show', ['id_user' => $user->id]);
        }
        // jika koin user tidak cukup untuk menukar barang
        else {
            return back()->withErrors(['error' => 'Koin Anda tidak cukup']);
        }


        // redirect kembali ke halaman redeemkoin
        return redirect()->route('redeemkoin.show', ['id_user' => $user->id]);
    }

    public function redeem(Request $request, $id_barang)
    {
        $barang = BarangModel::findOrFail($id_barang);
        $harga_barang = $barang->harga;
        $user = Auth::user();
        $saldo_koin = TableKoinModel::where('id_user', $user->id)->value('saldo_koin');

        // Cek apakah saldo koin user mencukupi
        if ($saldo_koin < $harga_barang) {
            return redirect()->back()->with('error', 'Maaf, saldo koin Anda tidak mencukupi.');
        }

        // Update saldo koin user
        $table_koin = TableKoinModel::where('id_user', $user->id)->first();
        $table_koin->saldo_koin -= $harga_barang;
        $table_koin->save();

        return redirect()->route('redeemkoin.index')->with('success', 'Penukaran barang berhasil dilakukan.');
    }

}