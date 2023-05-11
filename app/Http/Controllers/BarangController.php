<?php

namespace App\Http\Controllers;

use App\Models\BarangModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $databarang = BarangModel::all();
        return view('admin.tambahBarang', compact('databarang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createBarang');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // validasi input
        $request->validate([
            'nama' => 'required',
            'harga' => 'required',
            'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        if ($request->hasFile('profile')) { // tambahkan kondisi untuk memeriksa apakah input gambar diisi atau tidak
            $gambar = $request->file('profile');

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

        // menyimpan data user ke database
        BarangModel::create([
            'nama' => $request->nama,
            'harga' => $request->harga,
            'gambar' => $filename,
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}