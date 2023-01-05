<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function pendaftaran()
    {
        $title = 'Pendaftaran';
        $text = 'Halaman Pendaftaran';
        return view('mahasiswa.pendaftaran', compact('title', 'text'));
    }

    public function ujian()
    {
        $title = 'Ujian';
        $text = 'Halaman Ujian';
        return view('mahasiswa.ujian', compact('title', 'text'));
    }

    public function nilai()
    {
        $title = 'Nilai';
        $text = 'Halaman Nilai';
        return view('mahasiswa.nilai', compact('title','text'));
    }
}
