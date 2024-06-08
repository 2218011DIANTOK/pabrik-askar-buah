<?php

namespace App\Http\Controllers;
use App\Models\Input;
use App\Models\Gagasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class InputController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
        $input = Input::all();
    	// mengirim data pegawai ke view index
    	return view('layout/input');
 
    }

    public function tambahinput()
    {
    	// mengambil data dari table pegawai
    	
        
    	// mengirim data pegawai ke view index
    	return view('layout/tambahinput');
 
    }

    public function insertdata1(Request $request)
    {
       
       
        
        // mengambil data dari table pegawai
    	Input::create($request->all());
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('input');
 
    }

    public function ubahinput($id_input)
    {
    	// mengambil data dari table pegawai
        $input = Input::find($id_input);
 
    	// mengirim data pegawai ke view index
    	return view('layout/ubahinput');
 
    }

    public function updatedata1(Request $request, $id_input)
    {
    	// mengambil data dari table pegawai
        $input = Input::find($id_input);
        $input->update($request->all());
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('input');
 
    }

    public function deleteinput($id_input)
    {
    	// mengambil data dari table pegawai
        $input = Input::find($id_input);
        $input->delete();
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('input');
 
    }
}
