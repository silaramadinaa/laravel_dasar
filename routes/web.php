<?php

use Illuminate\Support\Facades\Route;

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
?>