<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TableUserModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

use App\Models\User;

class ManageUserController extends Controller
{

    // public function getData()
    // {
    //     $data = User::all();
    //     return $data;
    // }

    /**
     * Display a listing of the resource.
     * 
     * 
     */
    public function index()
    {
        $datauser = User::all();
        return view('admin.manageUser', compact('datauser'));
    }
    // ini untuk menampilkan foto di topbar
    // public function index2()
    // {
    //     $datauser = $this->getData();
    //     return view('layouts.master', compact('datauser'));
    // }
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
        // validasi input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'role' => 'required',
            'profile' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $password = $request->input('password');
        $hashedPassword = bcrypt($password);

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
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $hashedPassword,
            'role' => $request->role,
            'gambar' => $filename,
        ]);

        // return redirect('manage-user')->with('success', 'User berhasil ditambahkan!');
    }



    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->keyword;

        // mengambil data dari table us sesuai pencarian data
        $users = DB::table('users')
            ->where('users_nama', 'like', "%" . $cari . "%")
            ->paginate();

        // mengirim data users ke view index
        return view('admin.manageUser', ['users' => $users]);
    }
    //untuk menampilkan data user 
    public function tampilkanDataUser($id)
    {

        $data = User::find($id);
        // dd($data);
        return view('admin.editTampilDataUser', compact('data'));
    }


    //untuk update data user
    public function updateDataUser(Request $request, $id)
    {
        // validasi input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            // 'role' => 'required',
            'profile' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        // mengambil data user dari database
        $user = User::find($id);

        // update data kecuali kolom gambar
        $user->name = $request->name;
        $user->email = $request->email;
        // $user->role = $request->role;

        // jika ada gambar yang diunggah, maka update gambar
        if ($request->hasFile('profile')) {
            // menghapus gambar lama
            Storage::delete('public/assets/profile/' . $user->gambar);
            // menghapus gambar lama
            Storage::delete('public/assets/profile/' . $user->gambar);
        }
        // membuat folder baru jika belum ada
        $path = storage_path('app/public/assets/profile');
        if (!Storage::exists($path)) {
            Storage::makeDirectory($path, 0777, true, true);
        }

        // mengambil isi file gambar
        $gambarData = null;
        $gambar = $request->file('profile');
        if ($gambar) {
            $gambarData = file_get_contents($gambar->getRealPath());
        }

        // menyimpan file gambar ke direktori "public/assets/profile"
        $filename = null;
        if ($gambar) {
            $filename = $request->file('profile')->store('public/assets/profile');
            $filename = pathinfo($filename, PATHINFO_BASENAME);
        }

        // update data user ke database
        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            // 'role' => $request->role,
            'gambar' => $filename,
        ]);
        return redirect()->route('manage-user')->with('success', 'Data Berhasil di Edit');
    }


    public function deleteDataUser($id)
    {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('manage-user')->with('success', 'Data Berhasil di Hapus');

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