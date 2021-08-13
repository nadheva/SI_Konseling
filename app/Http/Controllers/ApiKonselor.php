<?php

namespace App\Http\Controllers;

use App\Models\Konselor;
use Illuminate\Http\Request;

class ApiKonselor extends Controller
{
    //API Untuk menampilakn indeks data
    public function index() 
    {
        $konselor = Konselor::all();
        return response()->json([
        "status" => true,
        "message" => "Pengambilan indeks data berhasil",
        "data" => $konselor
        ], 200);
    }
    
    //API untuk insert daat
    public function add(Request $req)
    {
    $konselor = new Konselor;
    $konselor -> id = $req -> id;
    $konselor -> nama_konselor = $req -> nama_konselor;
    $konselor -> nip = $req -> nip;
    $konselor -> jk = $req -> jk; 
    $konselor -> ttl = $req -> ttl;
    $result = $konselor -> save();
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
        $konselor = Konselor::findOrFail($id);

        return response()->json([
            "success" => true,
            "message" => "Detail Data konselor",
            "data" => $konselor
        ], 200);
    }

    //API untuk merubah data tertentu
    public function update(Request $request)
    {
        $konselor = Konselor::find($req->id);
        $konselor -> id = $req -> id;
        $konselor -> nama_konselor = $req -> nama_konselor;
        $konselor -> nip = $req -> nip;
        $konselor -> jk = $req -> jk; 
        $konselor -> ttl = $req -> ttl;
        $result = $konselor -> save();
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
       $konselor = Konselor::find($id);
       $result = $konselor -> delete();
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
