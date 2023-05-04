<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HistoryDonasiController extends Controller
{
    //
    public function showDataDonasi(){
        $data = DB::table('donasis')->where('id_user', Auth::user()->id)->get();
        return view('historyDonasi',['data_donasi'=> $data]);
    }
}
