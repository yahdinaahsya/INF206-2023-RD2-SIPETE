<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HistoryJualController extends Controller
{
    //
    public function showDataJual(){
        $data_jual = DB::table('juals')->where('id_user', Auth::user()->id)->get();
        return view('historyJual', compact('data_jual'));
    }
}