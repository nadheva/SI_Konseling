<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//Login Register
Route::get('/', [AuthController::class, 'showFormLogin'])->name('login');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);
 
Route::group(['middleware' => 'auth'], function () {
 
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
 
});

//Route::get('/', function () {
    //return view('template.index');
//});

//Jadwal
Route::get('/jadwal', 'App\Http\Controllers\C_Jadwal@index');
Route::get('/jadwal/create', 'App\Http\Controllers\C_Jadwal@create');
Route::post('/jadwal/store', 'App\Http\Controllers\C_Jadwal@store');
Route::get('/jadwal/edit/{id}', 'App\Http\Controllers\C_Jadwal@edit');
Route::put('/jadwal/update/{id}', 'App\Http\Controllers\C_Jadwal@update');
Route::get('/jadwal/delete/{id}', 'App\Http\Controllers\C_Jadwal@delete');

//Siswa
Route::get('/siswa', 'App\Http\Controllers\C_Siswa@index');
Route::get('/siswa/create', 'App\Http\Controllers\C_Siswa@create');
Route::post('/siswa/store', 'App\Http\Controllers\C_Siswa@store');
Route::get('/siswa/edit/{id}', 'App\Http\Controllers\C_Siswa@edit');
Route::put('/siswa/update/{id}', 'App\Http\Controllers\C_Siswa@update');
Route::get('/siswa/delete/{id}', 'App\Http\Controllers\C_Siswa@delete');

//Konselor
Route::get('/konselor', 'App\Http\Controllers\C_Konselor@index');
Route::get('/konselor/create', 'App\Http\Controllers\C_Konselor@create');
Route::post('/konselor/store', 'App\Http\Controllers\C_Konselor@store');
Route::get('/konselor/edit/{id}', 'App\Http\Controllers\C_Konselor@edit');
Route::put('/konselor/update/{id}', 'App\Http\Controllers\C_Konselor@update');
Route::get('/konselor/delete/{id}', 'App\Http\Controllers\C_Konselor@delete');
