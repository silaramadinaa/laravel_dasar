<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataSiswaController extends Controller
{
    public function datasiswa()
    {
        # code...
        $nama='Agung Wahyudi';
        return $nama;
    }
    public function datasiswi()
    {
        # code...
        $nama='Sila Ramadina';
        return $nama;
    }
    public function nama($nama = null)
    {
        # code...
        return 'Nama anda adalah : ' .$nama;
    }
}