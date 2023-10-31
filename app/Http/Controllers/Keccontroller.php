<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kecamatan;

class Keccontroller extends Controller
{
    public function Tampilkecamatan(){
        $kec = kecamatan::where('delstatus','=',true)->latest()->get();
        return view ('halaman.admin.kecamatan.kecamatan', compact('kec'));
    }
    public function Tampiltambahkec(){
        return view ('halaman.admin.kecamatan.tambahkec');
    }
    public function Simpankec(Request $request)
    {
        kecamatan::create([
            'kecamatan' => $request->kecamatan,
            'delstatus' => true,

        ]);
        return redirect('kecamatan');
    }
    public function Hapusdata($id)
{
    $varUsr = kecamatan::findOrFail($id);
    $varUsr->delete();
    return redirect('kecamatan');
}
}
