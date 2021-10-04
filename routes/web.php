<?php

use App\Http\Controllers\DataSiswaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('Hallo sila');
});
Route::get('/', function () {
    return view('Kamu sila?');
});
Route::get('/', function () {
    return view('Gatau');
});
Route::get('/', function () {
    return view('Oke');
});

Route::get('/nama-framework/{nama}', function ($nama) {
    return 'Nama Framework yang dimasukkan adalah : '.$nama;
});


Route::get('/nama-saya-adalah/{nama?}', function ($nama = null ){
return 'Nama saya adalah : '.$nama;
});

Route::get('/luas-segitiga/{alas}/{tinggi}', function ($alas,$tinggi){
    return 'Luas segitiga : '.($alas * $tinggi) * 0.5;
});
Route::group(['prefix' => 'jurusan'], function(){
    Route::get('/', function (){
        return 'berhasil';
    });
    Route::get('/kelas/{namaKelas}', function ($namaKelas){
        return $namaKelas;
    });
    Route::get('/wali-kelas/{nama}', function ($nama) {
        return $nama;
    });
});

Route::get('data-siswa' , [DataSiswaController::class, 'datasiswa']);
Route::get('data-siswi' , [DataSiswaController::class, 'datasiswi']);
Route::get('nama/{nama?}',[DataSiswaController::class, 'nama']);
Route::resource('user', UserController::class);
?>