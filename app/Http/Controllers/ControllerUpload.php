<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gambar;
use File;

class ControllerUpload extends Controller
{
    public function upload(){
		$gambar = Gambar::get();
		return view('upload',['gambar' => $gambar]);
	}
 
	public function proses_upload(Request $request){
		//dd($request->all());
		$this->validate($request, [
			'file' => 'required|file|image|mimes:jpeg,png,jpg|max:10000'
		]);
        
        // if($request->hasfile('file')){
        //     echo 'file ada';
        // }else{
        //     echo 'file tidak ada';
        // }
        $file = $request->file('file');
 
        
                
        
		
        
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('file');
 
		$nama_file = $file->getClientOriginalName();
 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'img/barang';
		$file->move($tujuan_upload,$nama_file);
        // echo $tujuan_upload;
		
		$id = 'BJ' . sprintf("%04s", rand(1, 999));
		Gambar::create([

            'kode_barang' => $id,
            'nama_barang'=> $request->nama_barang,
            'harga' => $request->harga,
            'deskripsi'=> $request->deskripsi,
            'stok' => $request->stok,
			'file' => $nama_file,
			// 'keterangan' => $request->keterangan,
		]);
 
		return redirect()->back();
	}

	
}
