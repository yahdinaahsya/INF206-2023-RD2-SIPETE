<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TableUserModel;
class ManageUserController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * 
     */
    public function index()
    {   $datauser = TableUserModel::all();
        return view('admin.manageUser', compact('datauser'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.createUser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->file('profile'));
        $gambar = $request->file('profile'); // ambil file gambar dari request

    // jika ada gambar yang diupload
       if ($gambar) {
          // baca isi file gambar
            $gambarData = file_get_contents($gambar->getRealPath());
        } else {
           // jika tidak ada gambar yang diupload, set isi file menjadi null
           $gambarData = null;
         }

        // jika ada gambar yang diupload
        if ($gambar) {
            // simpan file gambar ke storage
            $path = $request->file('profile')->store('public/assets/profile');
            // ambil nama file gambar saja
            $filename = pathinfo($path, PATHINFO_BASENAME);
        } else {
            // jika tidak ada gambar yang diupload, set nama file menjadi null
            $filename = null;
        }



    //   dd($request->all());
        TableUserModel::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'tgllhr' => $request->tgllhr,
            'provinsi'=>$request->provinsi,
            'gambar' => $filename, // simpan nama file gambar ke database
        ]);
        return redirect('manage-user');
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
