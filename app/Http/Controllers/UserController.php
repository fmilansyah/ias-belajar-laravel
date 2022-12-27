<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        session()->forget('StatusLogin');
        return view('login');
    }

    public function login(Request $request)
    {
        $MyGetDataLogin = DB::table('user')->where([
            'username' => $request->username,
            'status' => 1,
        ])->get();

        if (count($MyGetDataLogin) >= 1) {
            foreach($MyGetDataLogin as $row) {
                if ($row->password == trim($request->password)) {
                    $request->session()->put('StatusLogin', 1);
                    return redirect('/mahasiswa');
                } else {
                    return redirect('/');
                }
            }
        } else {
            return redirect('/');
        }
    }
}
