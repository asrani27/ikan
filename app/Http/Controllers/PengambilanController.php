<?php

namespace App\Http\Controllers;

use App\Models\Pengambilan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PengambilanController extends Controller
{
    public function index()
    {
        $data = Pengambilan::orderBy('id', 'DESC')->get();
        return view('admin.pengambilan.index', compact('data'));
    }

    public function create()
    {
        return view('admin.pengambilan.create');
    }
    public function edit($id)
    {
        $data = Pengambilan::find($id);
        return view('admin.pengambilan.edit', compact('data'));
    }
    public function store(Request $req)
    {
        $check = Pengambilan::where('nama', $req->nama)->first();
        if ($check != null) {
            Session::flash('error', 'nama pengambilan Sudah Ada');
            return back();
        } else {
            Pengambilan::create($req->all());
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/pengambilan');
        }
    }
    public function update(Request $req, $id)
    {
        $data = Pengambilan::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/pengambilan');
    }
    public function delete($id)
    {
        $data = Pengambilan::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/pengambilan');
    }
}
