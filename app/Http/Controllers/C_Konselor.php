<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Konselor;
use Illuminate\Http\Request;

class C_Konselor extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $konselor = Konselor::all();
        return view('konselor.index', ['konselor' => $konselor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('konselor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Konselor::insert([
            'nama_konselor' => $request->nama_konselor,
            'nip'=> $request->nip,
            'jk'=> $request->jk,
            'ttl' => $request->ttl
        ]);

        //Siswa::create($request->all());

        return redirect('/konselor')->with('status', 'Data berhasil ditambah!');
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
     * @param  \App\Models\Konselor  $konselor
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    { 
        // mengambil data siswa berdasarkan id yang dipilih
        $konselor = DB::table('konselor')->where('id',$id)->get(); 
        
        // passing data siswa yang didapat ke view edit.blade.php 
        return view('konselor.edit',['konselor' => $konselor]);
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
        Konselor::where('id', $request->id)
            ->update([
                'nama_konselor' => $request->nama_konselor,
                'nip'=> $request->nip,
                'jk'=> $request->jk,
                'ttl' => $request->ttl
            ]);
        return redirect('/konselor')->with('status', 'Data berhasil diedit!');
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
        Konselor::where('id',$id)->delete();
        
        // alihkan halaman ke halaman siswa
        return redirect('/konselor');
    }
}
