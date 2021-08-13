<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class ApiSiswa extends Controller
{
    //API Untuk menampilakn indeks data
    public function index() 
    {
        $siswa = Siswa::all();
        return response()->json([
        "status" => true,
        "message" => "Pengambilan indeks data berhasil",
        "data" => $siswa
        ], 200);
    }
    
    //API untuk insert daat
    public function add(Request $req)
    {
    $siswa = new Siswa;
    $siswa -> id = $req -> id;
    $siswa -> nama_siswa = $req -> nama_siswa;
    $siswa -> nis = $req -> nis;
    $siswa -> jk = $req -> jk; 
    $siswa -> kelas = $req -> kelas;
    $siswa -> ttl = $req -> ttl;
    $result = $siswa -> save();
    if($result )
    {
        return ["Data telah disimpan"];
    }
        else
    {
        return ["Data tidak bisa disimpan"];
    }
    }

    //API untuk menampilkan data tertentu 
    public function show($id)
    {
        $siswa = Siswa::findOrFail($id);

        return response()->json([
            "success" => true,
            "message" => "Detail Data Siswa",
            "data" => $siswa
        ], 200);
    }

    //API untuk merubah data tertentu
    public function update(Request $request)
    {
        $siswa = Siswa::find($req->id);
        $siswa -> id = $req -> id;
        $siswa -> nama_siswa = $req -> nama_siswa;
        $siswa -> nis = $req -> nis;
        $siswa -> jk = $req -> jk; 
        $siswa -> kelas = $req -> kelas;
        $siswa -> ttl = $req -> ttl;
        $result = $siswa -> save();
        if($result )
        {
            return ["Data telah disimpan"];
        }
            else
        {
            return ["Data tidak bisa disimpan"];
        }
    }

    //API untuk menghapus data
    public function delete($id)
    {
       $siswa = Siswa::find($id);
       $result = $siswa -> delete();
       if($result )
       {
           return ["Data telah dihapus"];
       }
           else
       {
           return ["Data gagal dihapus"];
       }

    }
}
