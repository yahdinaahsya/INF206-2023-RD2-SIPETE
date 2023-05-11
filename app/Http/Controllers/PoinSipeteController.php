<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\TableKoinModel;

class PoinSipeteController extends Controller
{
    public function index()
    {
        $user = auth()->user(); // Ambil user yang sedang login
        $saldo_koin = TableKoinModel::where('id_user', $user->id)->value('saldo_koin'); // Ambil saldo koin milik user yang sedang login

        return view('redeemkoin', compact('saldo_koin'));
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

        // redirect kembali ke halaman redeemkoin
        return redirect()->route('redeemkoin.show', ['id_user' => $user->id]);
    }
}