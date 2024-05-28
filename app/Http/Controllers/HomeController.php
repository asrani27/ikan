<?php

namespace App\Http\Controllers;

use App\Models\Ikan;
use App\Models\Lurah;
use App\Models\Petani;
use App\Models\Pegawai;
use App\Models\Tpermohonan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function superadmin()
    {
        $ikan = Ikan::count();
        $petani = Petani::count();
        $pegawai = Pegawai::count();
        return view('admin.home', compact('ikan', 'petani', 'pegawai'));
    }

    public function pemohon()
    {
        return view('pemohon.home');
    }

    public function updatelurah(Request $request)
    {
        Lurah::first()->update($request->all());
        Session::flash('success', 'Berhasil Diupdate');
        return back();
    }
}
