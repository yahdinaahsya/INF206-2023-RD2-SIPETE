<?php

namespace App\Http\Controllers;

use App\Models\Donasi;
use App\Http\Requests\StoredonasiRequest;
use App\Http\Requests\UpdatedonasiRequest;
use Illuminate\Support\Facades\Auth;

class DonasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreDonasiRequest $request)
    {
        Donasi::create([
            'id_user' => Auth::user()->id,
            'nama' => $request->name,
            'alamat' => $request->alamat,
            'tgldonasi' => $request->tanggal,
            'email' => $request->email,
            'no_hp' => $request->telepon,
            'cr_kirim' => $request->pengiriman
        ]);

        return redirect()->back();

    }

    /**
     * Display the specified resource.
     */
    public function show(Donasi $Donasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Donasi $Donasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDonasiRequest $request, Donasi $Donasi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Donasi $Donasi)
    {
        //
    }
}