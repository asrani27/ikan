<?php

namespace App\Http\Controllers;

use App\Models\Petani;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PetaniController extends Controller
{

    public function index()
    {
        $data = Petani::orderBy('id', 'DESC')->get();
        return view('admin.petani.index', compact('data'));
    }

    public function create()
    {
        return view('admin.petani.create');
    }
    public function edit($id)
    {
        $data = Petani::find($id);
        return view('admin.petani.edit', compact('data'));
    }
    public function store(Request $req)
    {
        $check = Petani::where('nama', $req->nama)->first();
        if ($check != null) {
            Session::flash('error', 'nama petani Sudah Ada');
            return back();
        } else {
            Petani::create($req->all());
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/petani');
        }
    }
    public function update(Request $req, $id)
    {
        $data = Petani::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/petani');
    }
    public function delete($id)
    {
        $data = Petani::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/petani');
    }
}
