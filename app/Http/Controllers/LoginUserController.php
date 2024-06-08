<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\Pengguna;

class LoginUserController extends Controller
{
    public function loginuser()
    {
        if (Auth::check()) {
            return redirect('home');
        } else {
            return view('loginuser');
        }
    }

    public function actionlogin1(Request $request)
    {
        $nama_pengguna = $request->input('nama_pengguna');
        $password = $request->input('password');

        $user = Pengguna::where('nama_pengguna', $nama_pengguna)
                        ->where('password', $password)
                        ->first();

        if ($user) {
            Auth::login($user);
            return redirect('home');
        } else {
            Session::flash('error', 'Username atau Password Salah');
            return redirect('/');
        }
    }

    public function actionlogout1()
    {
        Auth::logout();
        return redirect('/');
    }
}