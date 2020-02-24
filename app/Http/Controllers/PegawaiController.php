<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PegawaiController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_pegawai = \App\Pegawai::where('nama','LIKE','%'.$request->cari.'%')->get();
        }else{
        $data_pegawai = \App\Pegawai::paginate(5);
        }
        return view('pegawai.index',['data_pegawai' => $data_pegawai]);
    }

    public function create(Request $request)
    {
        \App\Pegawai::create($request->all());
        echo $request->file('image')->store('public');
        return redirect('\pegawai');
    }

    public function edit($id)
    {
        $pegawai = \App\Pegawai::find($id);
        return view('pegawai/edit',['pegawai' => $pegawai]);
    }

    public function update(Request $request,$id)
    {
        $pegawai = \App\Pegawai::find($id);
        $pegawai->update($request->all());
        return redirect('/pegawai');
    }

    public function delete($id)
    {
        $pegawai = \App\Pegawai::find($id);
        $pegawai->delete($pegawai);
        return redirect('/pegawai');
    }
}
