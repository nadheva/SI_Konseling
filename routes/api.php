<?php
use App\Http\Controllers\ApiSiswa;
use App\Http\Controllers\ApiJadwal;
use App\Http\Controllers\ApiKonselor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

//Route Siswa
Route::get('/siswa', [ApiSiswa::class, 'index'] );
Route::post('/siswa/add', [ApiSiswa::class, 'add'] );
Route::get('/siswa/show/{id}', [ApiSiswa::class, 'show'] );
Route::put('/siswa/update/{id}', [ApiSiswa::class, 'update'] );
Route::delete('/siswa/delete/{id}', [ApiSiswa::class, 'delete'] );

//Route Jadwal
Route::get('/jadwal', [ApiJadwal::class, 'index'] );
Route::post('/jadwal/add', [ApiJadwal::class, 'add'] );
Route::get('/jadwal/show/{id}', [ApiJadwal::class, 'show'] );
Route::put('/jadwal/update/{id}', [ApiJadwal::class, 'update'] );
Route::delete('/jadwal/delete/{id}', [ApiJadwal::class, 'delete'] );

//Route konselor
Route::get('/konselor', [ApiKonselor::class, 'index'] );
Route::post('/konselor/add', [ApiKonselor::class, 'add'] );
Route::get('/konselor/show/{id}', [ApiKonselor::class, 'show'] );
Route::put('/konselor/update/{id}', [ApiKonselor::class, 'update'] );
Route::delete('/konselor/delete/{id}', [ApiKonselor::class, 'delete'] );