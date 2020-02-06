<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
    	$data_pegawai = \App\Pegawai::all();
    	return view('pegawai.index',['data_pegawai' => $data_pegawai]);
    }

    public function create(Request $request)
    {
    	\App\Pegawai::create($request->all());
    	return redirect('/pegawai');
    }

    public function edit($id)
    {
    	$pegawai = \App\Pegawai::find($id);
    	return view('pegawai.edit',['siswa' => $siswa]);
    }

    public function update(Request $request, $id)
    {
    	$pegawai = \App\pegawai::find($id);
    	$pegawai->update($request->all());
    	return redirect('/siswa');
    }

    public function delete($id)
    {
    	$pegawai = \App\Pegawai::find($id);
    	$pegawai->delete($pegawai);
    	return redirect('/pegawai');
    }
}
