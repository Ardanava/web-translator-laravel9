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
        //validate form
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

        //check if image is uploaded
        if ($request->hasFile('image')) {

            //upload new image
            $image = $request->file('image');
            $image->storeAs('public/posts', $image->hashName());

            //delete old image
            Novel::delete('public/posts/'.$novel->image);

            //update post with new image
            $novel->update([
                'judul_novel' => $request->judul_novel,
                'penulis' => $request->penulis,
                'penerbit' => $request->penerbit,
                'tipe' => $request->tipe,
                'sampul_novel' => $image->hashName(),
                'status' => $request->status,
                'genre' => $request->genre,
                'kerjasama' => $request->kerjasama,
                'sinopsis' => $request->sinopsis,
            ]);

        } else {

            //update post without image
            $novel->update([
                'judul_novel' => $request->judul_novel,
                'penulis' => $request->penulis,
                'penerbit' => $request->penerbit,
                'tipe' => $request->tipe,
                'status' => $request->status,
                'genre' => $request->genre,
                'kerjasama' => $request->kerjasama,
                'sinopsis' => $request->sinopsis,
            ]);
        }

        //redirect to index
        return redirect()->route('novels.index')->with(['success' => 'Data Berhasil Diubah!']);
    }

    // public function destroy(Novel $company)
    // {
    //     $company->delete();
    //     return redirect()->route('companies.index')->with('success','Company has been deleted successfully');
    // }
}