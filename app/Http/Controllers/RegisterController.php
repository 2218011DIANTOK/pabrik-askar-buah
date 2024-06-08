<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Admin;

class RegisterController extends Controller
{
    public function index()
    {
        return view('layout/register');
    }

    public function process1(Request $request)
    {
        Admin::create($request->all());

        return redirect()->route('login'); // Atau rute lain yang diinginkan setelah registrasi berhasil
    }
}
?>