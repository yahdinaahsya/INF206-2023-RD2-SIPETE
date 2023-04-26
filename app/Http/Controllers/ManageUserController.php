<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TableUserModel;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
class ManageUserController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * 
     */
    public function index()
    {   $datauser = User::all();
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
    User::create([
        'name' => $request->name,
        'email' => $request->email,
        // 'alamat' => $request->alamat,
        // 'tgllhr' => $request->tgllhr,
        // 'provinsi' => $request->provinsi,
        'role'=>$request->role,
        'gambar' => $filename,
    ]);

    return redirect('manage-user');
}


public function cari(Request $request)
{
	// menangkap data pencarian
	$cari = $request->keyword;
 
 	// mengambil data dari table us sesuai pencarian data
	$users = DB::table('users')
	->where('users_nama','like',"%".$keyword."%")
	->paginate();
 
    	// mengirim data users ke view index
	return view('admin.manageUser',['users' => $users]);
 
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
