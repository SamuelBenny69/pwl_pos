<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StokController extends Controller
{
    public function index()
    {
       //menampilkan data
       $data =DB::select('select*from t_stok');
       return view( 'stok',['data'=>$data]);
    }
}
