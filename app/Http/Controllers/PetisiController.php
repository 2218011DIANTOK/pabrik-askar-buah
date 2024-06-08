<?php

namespace App\Http\Controllers;
use App\Models\Gagasan;
use App\Models\Petisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PetisiController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
        $petisi = Petisi::with('Gagasan')->get();
    	// mengirim data pegawai ke view index
    	return view('layout/petisi',compact('petisi'));
 
    }

    public function tambahpetisi()
    {
    	// mengambil data dari table pegawai
    	
        $gagasan=Gagasan::all();
    	// mengirim data pegawai ke view index
    	return view('layout/tambahpetisi',compact('gagasan'));
 
    }

    public function insertdata2(Request $request)
    {
       
       
        
        // mengambil data dari table pegawai
    	Petisi::create($request->all());
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('petisi');
 
    }

    public function ubahpetisi($id_petisi)
    {
    	// mengambil data dari table pegawai
        $petisi = Petisi::find($id_petisi);
        $gagasan=Gagasan::all();
 
    	// mengirim data pegawai ke view index
    	return view('layout/ubahpetisi',compact('petisi','gagasan'));
 
    }

    public function updatedata2(Request $request, $id_petisi)
    {
    	// mengambil data dari table pegawai
        $petisi = Petisi::find($id_petisi);
        $petisi->update($request->all());
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('petisi');
 
    }

    public function deletepetisi($id_petisi)
    {
    	// mengambil data dari table pegawai
        $petisi = Petisi::find($id_petisi);
        $petisi->delete();
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('petisi');
 
    }
}
