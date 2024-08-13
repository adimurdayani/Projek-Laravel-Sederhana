<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        // Menampilkan halaman beranda, dengan memanggil file beranda.blade.php

        return view('beranda', [
            'title' => 'Beranda' //mengirim parameter judul ke halaman beranda
        ]);
    }
}
