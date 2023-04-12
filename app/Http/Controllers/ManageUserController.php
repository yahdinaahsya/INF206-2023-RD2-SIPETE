<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TableUserModel;
use Illuminate\Support\Facades\Storage;

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
    $gambar = $request->file('profile');

    // membuat folder baru jika belum ada
    $path = storage_path('app/public/assets/profile');
    if(!Storage::exists($path)){
        Storage::makeDirectory($path, 0777, true, true);
    }

    // mengambil isi file gambar
    $gambarData = null;
    if ($gambar) {
        $gambarData = file_get_contents($gambar->getRealPath());
    }

    // menyimpan file gambar ke direktori "public/assets/profile"
    $filename = null;
    if ($gambar) {
        $filename = $request->file('profile')->store('public/assets/profile');
        $filename = pathinfo($filename, PATHINFO_BASENAME);
    }

    // menyimpan data user ke database
    TableUserModel::create([
        'nama' => $request->nama,
        'email' => $request->email,
        'alamat' => $request->alamat,
        'tgllhr' => $request->tgllhr,
        'provinsi' => $request->provinsi,
        'gambar' => $filename,
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
