<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    public function index()
    {
       //menampilkan data
       $data =DB::select('select*from t_penjualan');
       return view( 'penjualan',['data'=>$data]);
    }
}
