<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mahasiswa;

class TestController extends Controller
{
    //
    public function contentMhs() {
        $data = Mahasiswa::get();
        return view('Mahasiswa',['mhs' => $data]);
    }

    public function tambahmhs() {
        return view('Tambahmahasiswa');
    }

    public function store( Request $request) {

        $data = new Mahasiswa;
        $data->nama     = $request->nama;
        $data->alamat   = $request->alamat;
        $data->nohp     = $request->nohp;
        $data->save();

        return redirect('mahasiswa');
    }
}
