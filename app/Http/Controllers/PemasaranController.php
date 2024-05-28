<?php

namespace App\Http\Controllers;

use App\Models\Ikan;
use App\Models\Pemasaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PemasaranController extends Controller
{
    public function index()
    {
        $data = Pemasaran::orderBy('id', 'DESC')->get();
        return view('admin.pemasaran.index', compact('data'));
    }

    public function create()
    {
        $ikan = Ikan::get();
        return view('admin.pemasaran.create', compact('ikan'));
    }
    public function edit($id)
    {
        $data = Pemasaran::find($id);
        $ikan = Ikan::get();
        return view('admin.pemasaran.edit', compact('data', 'ikan'));
    }
    public function store(Request $req)
    {
        Pemasaran::create($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/pemasaran');
    }
    public function update(Request $req, $id)
    {
        $data = Pemasaran::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/pemasaran');
    }
    public function delete($id)
    {
        $data = Pemasaran::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/pemasaran');
    }
}
