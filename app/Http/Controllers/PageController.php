<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
      // Metode untuk route /
      public function index() {
        return 'Selamat Datang';
    }

    // Metode untuk route /about
    public function about() {
        $nama = 'Abel';  // Ganti dengan nama sebenarnya
        $nim = '2241760045';    // Ganti dengan NIM sebenarnya
        return 'Nama: ' . $nama . '<br>NIM: ' . $nim;
    }

    // Metode untuk route /articles/{id}
    public function articles($id) {
        return 'Halaman Artikel dengan Id ' . $id;
    }
}

