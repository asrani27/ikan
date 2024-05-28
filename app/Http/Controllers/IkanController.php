<?php

namespace App\Http\Controllers;

use App\Models\Ikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class IkanController extends Controller
{

    public function index()
    {
        $data = Ikan::orderBy('id', 'DESC')->get();
        return view('admin.ikan.index', compact('data'));
    }

    public function create()
    {
        return view('admin.ikan.create');
    }
    public function edit($id)
    {
        $data = Ikan::find($id);
        return view('admin.ikan.edit', compact('data'));
    }
    public function store(Request $req)
    {
        $check = Ikan::where('nama', $req->nama)->first();
        if ($check != null) {
            Session::flash('error', 'nama ikan Sudah Ada');
            return back();
        } else {
            Ikan::create($req->all());
            Session::flash('success', 'Berhasil');
            return redirect('/superadmin/ikan');
        }
    }
    public function update(Request $req, $id)
    {
        $data = Ikan::find($id)->update($req->all());
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/ikan');
    }
    public function delete($id)
    {
        $data = Ikan::find($id)->delete();
        Session::flash('success', 'Berhasil');
        return redirect('/superadmin/ikan');
    }
}
