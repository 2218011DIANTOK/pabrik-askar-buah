<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
 $admin = Admin::all();
    	// mengirim data pegawai ke view index
    	return view('layout/admin',['admin'=>$admin]);
 
    }

    public function tambahadmin()
    {
    	// mengambil data dari table pegawai
    	
 
    	// mengirim data pegawai ke view index
    	return view('layout/tambahadmin');
 
    }

    public function insertdata3(Request $request)
    {
        Admin::create($request->all());
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('admin');
        
        // mengambil data dari table pegawai
 
    	// mengirim data pegawai ke view index
    	
 
    }

    public function ubahadmin($id_admin)
    {
    	// mengambil data dari table pegawai
        $admin = Admin::find($id_admin);
 
    	// mengirim data pegawai ke view index
    	return view('layout/ubahadmin',compact('admin'));
 
    }

    public function updatedata3(Request $request, $id_admin)
    {
    	// mengambil data dari table pegawai
        $admin = Admin::find($id_admin);
        $admin->update($request->all());
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('admin');
 
    }

    public function deleteadmin($id_admin)
    {
    	// mengambil data dari table pegawai
        $admin = Admin::find($id_admin);
        $admin->delete();
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('admin');
 
    }
}
