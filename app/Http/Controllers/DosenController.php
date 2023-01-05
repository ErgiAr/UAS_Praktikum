<?php

namespace App\Http\Controllers;

use App\Models\DosenModel;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function profil()
    {
        $data=DosenModel::all();
        $title="Profil Dosen";
        return view("dosen.profil",compact('data','title'));
    }
}
