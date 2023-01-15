<?php

namespace App\Http\Controllers;
use App\Models\Novel;
use Illuminate\Http\Request;

class NovelController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
         $novels = Novel::orderBy('id','desc')->paginate(5); 
        return view('novel.list', compact('novels'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('novel.tambah-novel');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $this->validate($request, [
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
		// menyimpan data file yang diupload ke variabel $file
		$file = $request->file('sampul_novel'); 
		$nama_file = time()."_".$file->getClientOriginalName(); 
      	        // isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'sampul_novel';
		$file->move($tujuan_upload,$nama_file); 
		Novel::create([
			'judul_novel' => $request->judul_novel,
			'penulis' => $request->penulis,
			'penerbit' => $request->penerbit,
			'tipe' => $request->tipe,
			'sampul_novel' => $nama_file,
            'status' => $request->status,
            'genre' => $request->genre,
            'kerjasama' => $request->kerjasama,
            'sinopsis' => $request->sinopsis,
		]);

        return redirect()->route('novels.index')->with('success','Novel Berhasil Ditambahkan!');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\company  $company
    * @return \Illuminate\Http\Response
    */
    // public function show(Novel $novels)
    // {
    //     return view('novel.tampil',compact('novel'));
    // }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\Company  $company
    * @return \Illuminate\Http\Response
    */
    public function edit(Novel $novel)
    {
        return view('novel.edit',compact('novel'));
    }

    
    public function update(Request $request, Novel $novel)
    {

        $this->validate($request, [
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
    
        return redirect()->route('novels.index')
                        ->with('success','Product updated successfully');
    }

    // public function destroy(Novel $company)
    // {
    //     $company->delete();
    //     return redirect()->route('companies.index')->with('success','Company has been deleted successfully');
    // }
}