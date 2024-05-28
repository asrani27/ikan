<?php

namespace App\Http\Controllers;

use App\Models\Bibit;
use App\Models\Ikan;
use App\Models\Pegawai;
use App\Models\Pemasaran;
use App\Models\Pengajuan;
use App\Models\Pengambilan;
use App\Models\Petani;
use App\Models\User;
use Illuminate\Http\Request;

class LaporanController extends Controller
{

    public function index()
    {
        return view('admin.laporan.index');
    }
    public function petani()
    {
        $data = Petani::get();
        return view('admin.laporan.petani', compact('data'));
    }

    public function pegawai()
    {
        $data = Pegawai::get();
        return view('admin.laporan.pegawai', compact('data'));
    }

    public function ikan()
    {
        $data = Ikan::get();
        return view('admin.laporan.ikan', compact('data'));
    }


    public function periode(Request $req)
    {
        $from = $req->mulai;
        $to = $req->sampai;

        if ($req->jenis == '1') {
            $data = Pengambilan::whereBetween('tanggal', [$from, $to])->get();
            return view('admin.laporan.pengambilan', compact('data', 'from', 'to'));
        }
        if ($req->jenis == '2') {
            $data = Pemasaran::whereBetween('tanggal', [$from, $to])->get();
            return view('admin.laporan.pemasaran', compact('data', 'from', 'to'));
        }
    }
}
