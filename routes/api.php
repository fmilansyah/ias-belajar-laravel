<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\ControllerApiMahasiswa;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//url untuk metode get isinya menampilkan data
Route::get('/mahasiswa/get', [ControllerApiMahasiswa::class,'index']);

//url untuk metode post yang isinya menyimpan data
Route::post('/mahasiswa/post', [ControllerApiMahasiswa::class,'simpan']);

//url untuk metode put yang isinya mengubah data
Route::put('/mahasiswa/update', [ControllerApiMahasiswa::class,'update']);

//url untuk metode delete yang isinya menghapus data
Route::delete('/mahasiswa/delete/{id}', [ControllerApiMahasiswa::class,'hapus']);