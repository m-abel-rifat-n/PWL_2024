<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show()
    {
        $nama = 'Abel';  
        $nim = '2241760045';    
        return 'Nama: ' . $nama . '<br>NIM: ' . $nim;
    }
}
