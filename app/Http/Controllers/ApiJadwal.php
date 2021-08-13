<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class ApiJadwal extends Controller
{
    //API Untuk menampilakn indeks data
    public function index() 
    {
        $jadwal = Jadwal::all();
        return response()->json([
        "status" => true,
        "message" => "Pengambilan indeks data berhasil",
        "data" => $jadwal
        ], 200);
    }
    
    //API untuk insert daat
    public function add(Request $req)
    {
    $jadwal = new Jadwal;
    $jadwal -> id = $req -> id;
    $jadwal -> kelas = $req ->kelas;
    $jadwal -> konselor = $req -> konselor;
    $jadwal -> tanggal = $req -> tanggal;
    $jadwal -> materi = $req -> materi;
    $result = $jadwal -> save();
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
        $jadwal = Jadwal::findOrFail($id);

        return response()->json([
            "success" => true,
            "message" => "Detail Data Siswa",
            "data" => $jadwal
        ], 200);
    }

    //API untuk merubah data tertentu
    public function update(Request $request)
    {
        $jadwal = Jadwal::find($req->id);
        $jadwal -> id = $req -> id;
        $jadwal -> kelas = $req -> kelas;
        $jadwal -> konselor = $req -> konselor;
        $jadwal -> tanggal = $req -> tanggal;
        $jadwal -> materi = $req -> materi;
        $result = $jadwal -> save();
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
       $jadwal = Jadwal::find($id);
       $result = $jadwal -> delete();
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
