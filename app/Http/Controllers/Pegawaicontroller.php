<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pegawai;

class Pegawaicontroller extends Controller
{
    public function Tampilpegawai(){
        $pegawai = pegawai::where('delstatus','=',true)->latest()->get();
        return view ('halaman.admin.pegawai.pegawai',compact('pegawai')); 
    }
    public function Tampiltambahpegawai(){
        return view ('halaman.admin.pegawai.tambahpegawai');
    }
    public function Editpegawai($id)
    {
        $pegawai = pegawai::findOrFail($id);
        return view('halaman.admin.pegawai.editpegawai', compact('pegawai'));
    }
    public function Simpanedit(Request $request, $id)
{
    if ($request->id) {
        $pegawai = pegawai::findOrFail($id);

        $data = [
            'nip' => $request->nip,
            'nama' => $request->nama,
            'tgl_lahir' => $request->tgl_lahir,
            'no_telepon'=> $request->no_telepon,
            'jenis_kelamin'=> $request->jenis_kelamin,
            'alamat' => $request->alamat,
        ];

        $pegawai->update($data);
        return redirect('pegawai');
    }else{
        return back();
    };
}
    public function Simpanpegawai(Request $request)
    {
        pegawai::create([
            'nip'=> $request->nip,
            'nama' => $request->nama,
            'tgl_lahir' => $request->tgl_lahir,
            'no_telepon' => $request->no_telepon,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'delstatus' => true,

        ]);
        return redirect('pegawai');
    }
    public function Hapusdata($id)
    {
    $varUsr = pegawai::findOrFail($id);
    $varUsr->delete();
    return redirect('pegawai');
    }
}
