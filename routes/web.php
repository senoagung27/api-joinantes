<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\API\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('products', ProductController::class);
});

// Route::post('login', 'AuthController@login');
// Route::group(['prefix' => 'auth', 'middleware' => 'auth:sanctum'], function() {
//     // manggil controller sesuai bawaan laravel 8
//     Route::get('/', 'HomeController@index')->name('home');
// Route::get('/Pegawai', 'PegawaiController@index');
// Route::get('/TambahPegawai', 'PegawaiController@create')->name('pegawai.create');
// Route::post('/SimpanPegawai', 'PegawaiController@store');
// Route::get('/HapusPegawai/{id}', 'PegawaiController@delete');
// Route::get('/EditPegawai/{id}', 'PegawaiController@edit');
// Route::post('/SimpanEditPegawai/{id}', 'PegawaiController@update');

// Route::get('/Cuti', 'CutiController@index');
// Route::get('/TambahCuti', 'CutiController@create')->name('cuti.create');
// Route::post('/SimpanCuti', 'CutiController@store');
// Route::get('/HapusCuti/{id}', 'CutiController@delete');
// Route::get('/EditCuti/{id}', 'CutiController@edit');
// Route::post('/SimpanEditCuti/{id}', 'CutiController@update');
//     Route::post('logout', [AuthController::class, 'logout']);
// });
// Route::group(['middleware' =>['auth']], function(){
//     Route::get('/', function () {
//         return view('home');
//     });
//     Route::get('/', 'HomeController@index')->name('home');
//     Route::post('/','HomeController@transaksiTerbaru');
//     Route::get('/MonitorBerkas','HomeController@MonitorBerkas');

// });

// Route::group(['middleware' =>['auth','CekRole:admin,anggota']], function(){
//     Route::get('/Pinjam', function () {
//         return view('pinjam');
//     });
//     Route::get('/Pinjam', 'PinjamController@index')->name('Pinjam');
//     Route::get('/Tambahpinjam', 'PinjamController@tambah')->name('pinjam.create');
//     Route::post('/Simpanpinjam','PinjamController@create');
//     Route::post('/SimpanEditPinjam','PinjamController@simpanedit');
//     Route::get('/editPinjam/{id}','PinjamController@edit');
//     Route::delete('/hapusPinjam/{id}','PinjamController@hapus');
//     Route::post('/updatePinjam','PinjamController@updatePinjam');

// });




