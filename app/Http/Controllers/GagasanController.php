<?php

namespace App\Http\Controllers;
use App\Models\Gagasan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GagasanController extends Controller
{
    public function index()
    {
    	// mengambil data dari table pegawai
 $gagasan = Gagasan::all();
    	// mengirim data pegawai ke view index
    	return view('layout/gagasan',['gagasan'=>$gagasan]);
 
    }

    public function getData()
    {
        // Fetch data from the gagasan table
        $data = Gagasan::all();
        return response()->json($data);
    }

    public function tambahgagasan()
    {
    	// mengambil data dari table pegawai
    	
 
    	// mengirim data pegawai ke view index
    	return view('layout/tambahgagasan');
 
    }

    public function insertdata(Request $request)
    {
        Gagasan::create($request->all());
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('gagasan');
        
        // mengambil data dari table pegawai
 
    	// mengirim data pegawai ke view index
    	
 
    }

    public function ubahgagasan($id_gagasan)
    {
    	// mengambil data dari table pegawai
        $gagasan = Gagasan::find($id_gagasan);
 
    	// mengirim data pegawai ke view index
    	return view('layout/ubahgagasan',compact('gagasan'));
 
    }

    public function updatedata(Request $request, $id_gagasan)
    {
    	// mengambil data dari table pegawai
        $gagasan = Gagasan::find($id_gagasan);
        $gagasan->update($request->all());
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('gagasan');
 
    }

    public function deletegagasan($id_gagasan)
    {
    	// mengambil data dari table pegawai
        $gagasan = Gagasan::find($id_gagasan);
        $gagasan->delete();
        
    	// mengirim data pegawai ke view index
    	return redirect()->route('gagasan');
 
    }

    

    
}
