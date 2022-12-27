<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data['mahasiswa'] = DB::table('mahasiswa')->get();
        return view('mahasiswa', $data);
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        DB::table('mahasiswa')->insert([
            'npm' => $request->npm,
            'nama' => $request->nama,
            'prodi' => $request->prodi,
        ]);
        return redirect('/mahasiswa');
    }
}
