<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerApiMahasiswa extends Controller
{
    public function index()
    {
        //mengambil data dari tabel matakuliah
        $data = DB::table('mahasiswa')->get();

        //melakukan konversi ke json
        return response()->json([
            "success" => true,
            "message" => "Data Mahasiswa",
            "data" => $data
        ]);
    }

    public function simpan(Request $request)
    {
        //perintah untuk menyimpan data
        DB::table('mahasiswa')->insert([
            'npm' => $request->npm,
            'nama' => $request->nama,
	        'prodi' => $request->prodi,
        ]);

        //memberikan pesan data berhasil disimpan dengan format json untuk client
        return response()->json([
            "message" => "Data Mahasiswa Telah Dibuat"
        ]);
    }

    public function update(Request $request)
    {
        // update data matakuliah berdasarkan id
        DB::table('mahasiswa')->where('id', $request->id)->update([
            'npm' => $request->npm,
            'nama' => $request->nama,
            'prodi' => $request->prodi
        ]);

        //memberikan pesan data berhasil diubah dengan format json untuk client
        return response()->json([
            "message" => "Data Mahasiswa Telah Ubah"
          ]);
    }

    public function hapus($id)
    {
        // menghapus data mahasiswa berdasarkan id 
        DB::table('mahasiswa')->where('id', $id)->delete();

        //memberikan pesan data berhasil hapus dengan format json untuk client
        return response()->json([
            "message" => "Data Mahasiswa Telah Hapus"
        ]);
    }
}
