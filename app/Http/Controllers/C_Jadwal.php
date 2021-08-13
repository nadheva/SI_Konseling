<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class C_Jadwal extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jadwal = Jadwal::all();
        return view('jadwal.index', ['jadwal' => $jadwal]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jadwal.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Jadwal::insert([
            'kelas' => $request->kelas,
            'konselor' => $request->konselor,
            'tanggal' => $request->tanggal,
            'materi' => $request->materi
        ]);

        //Siswa::create($request->all());

        return redirect('/jadwal')->with('status', 'Data berhasil ditambah!');
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
     * @param  \App\Models\Jadwal  $jadwal
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    { 
        // mengambil data siswa berdasarkan id yang dipilih
        $jadwal = DB::table('jadwal')->where('id',$id)->get(); 
        
        // passing data siswa yang didapat ke view edit.blade.php 
        return view('jadwal.edit',['jadwal' => $jadwal]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id_konseling
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Jadwal::where('id', $request->id)
            ->update([
                'kelas' => $request->kelas,
                'konselor' => $request->konselor,
                'tanggal' => $request->tanggal,
                'materi' => $request->materi
            ]);
        return redirect('/jadwal')->with('status', 'Data berhasil diedit!');
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
        Jadwal::where('id',$id)->delete();
        
        // alihkan halaman ke halaman siswa
        return redirect('/jadwal');
    }
}
