<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Siswa;
use Illuminate\Http\Request;

class C_Siswa extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa.index', ['siswa' => $siswa]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Siswa::insert([
            'nama_siswa' => $request->nama_siswa,
            'nis'=> $request->nis,
            'jk'=> $request->jk,
            'kelas' => $request->kelas,
            'ttl' => $request->ttl
        ]);

        //Siswa::create($request->all());

        return redirect('/siswa')->with('status', 'Data berhasil ditambah!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $siswa
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Siswa  $siswa
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    { 
        // mengambil data siswa berdasarkan id yang dipilih
        $siswa = DB::table('siswa')->where('id',$id)->get(); 
        
        // passing data siswa yang didapat ke view edit.blade.php 
        return view('siswa.edit',['siswa' => $siswa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Siswa::where('id', $request->id)
            ->update([
                'nama_siswa' => $request->nama_siswa,
                'nis'=> $request->nis,
                'jk'=> $request->jk,
                'kelas' => $request->kelas,
                'ttl' => $request->ttl
            ]);
        return redirect('/siswa')->with('status', 'Data berhasil diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id_siswa
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        // menghapus data siswa berdasarkan id yang dipilih
        Siswa::where('id',$id)->delete();
        
        // alihkan halaman ke halaman siswa
        return redirect('/siswa');
    }
}
