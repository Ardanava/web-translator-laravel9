<?php

namespace App\Http\Controllers;
use App\Models\Novel;
use Illuminate\Http\Request;

class Tes extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('imageUpload');
    }
      
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul_novel' => 'required',
            'penulis' => 'required|max:255',
            'penerbit' => 'required',
            'tipe' => 'required',
            'sampul_novel' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required',
            'genre' => 'required',
            'kerjasama' => 'required',
            'sinopsis' => 'required',
        ]);
  
        $input = $request->all();
  
        if ($image = $request->file('sampul_novel')) {
            $destinationPath = 'sampul_novel';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['sampul_novel'] = "$profileImage";
        }else{
            unset($input['sampul_novel']);
        }
          
        $novel->update($input);
    
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');

        // $this->validate($request, [
        //     'judul_novel' => 'required',
        //     'penulis' => 'required|max:255',
        //     'penerbit' => 'required',
        //     'tipe' => 'required',
        //     'sampul_novel' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'status' => 'required',
        //     'genre' => 'required',
        //     'kerjasama' => 'required',
        //     'sinopsis' => 'required',
		// ]); 
		// // menyimpan data file yang diupload ke variabel $file
		// $file = $request->file('sampul_novel'); 
		// $nama_file = time()."_".$file->getClientOriginalName(); 
      	//         // isi dengan nama folder tempat kemana file diupload
		// $tujuan_upload = 'file_sampul_novel';
		// $file->move($tujuan_upload,$nama_file); 
		// Novel::create([
		// 	'judul_novel' => $request->judul_novel,
		// 	'penulis' => $request->penulis,
		// 	'penerbit' => $request->penerbit,
		// 	'tipe' => $request->tipe,
		// 	'sampul_novel' => $nama_file,
        //     'status' => $request->status,
        //     'genre' => $request->genre,
        //     'kerjasama' => $request->kerjasama,
        //     'sinopsis' => $request->sinopsis,
		// ]);
 
		// return redirect()->back();
    }
}