<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CtrMahasiswa extends Controller
{
    public function index() {
        return view('mahasiswa');
    }

    public function mahasiswa() {
        return view('tambahmahasiswa');
    }
    

    public function simpan(Request $request) {
        $data_array = array(
            'npm' => trim($request->fnpm),
            'nama'=> trim($request->fnama),
            'prodi' => trim($request->prodi)
        );

        $get_messege = DB::table('table_mahasiswa')->insertOrIgnore($data_array);
    }
}