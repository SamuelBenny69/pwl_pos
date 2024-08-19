<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function index()
    {
       // DB::insert('insert into m_level(level_kode,level_nama,created_at) values(?,?,?)', ['cus', 'pelanggan',now()]);
       //return 'insert data baru berhasil';

       //$row = DB::update('update m_level set level_nama = ? where level_kode = ?',['costomer','cus']);
       //return 'update data berhasil.jumlah data yang diupdate: ' .$row.' baris';

       //$row = DB::delete('delete from m_level where level_kode = ?', ['cus']);
       //return 'Delete data berhasil.jumlah data yang dihapus: ' .$row. 'baris';

       //menampilkan data
       $data =DB::select('select*from m_barang');
       return view( 'barang',['data'=>$data]);
    }
}
