<?php

namespace App\Http\Controllers;

use App\Models\Konfirkirim;
use App\Http\Requests\StoreKonfirkirimRequest;
use App\Http\Requests\UpdateKonfirkirimRequest;

class KonfirKirimController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $konfirmasi_pengiriman= Konfirkirim::all();
        return view('admin.kelolaKonfir', compact(['konfirmasi_pengiriman']));
    }
}
