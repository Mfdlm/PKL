<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pelatihan;

class Pelatihancontroller extends Controller
{
    public function Tampilpelatihan(){
        $plth = pelatihan::where('delstatus','=',true)->latest()->get();
        return view ('halaman.admin.pelatihan.pelatihan', compact('plth'));
    }
    public function Tampiltambahplth(){
        return view ('halaman.admin.pelatihan.tambahplth');
    }
    public function Simpanplth(Request $request)
    {
        pelatihan::create([
            'jenis_pelatihan' => $request->jenis_pelatihan,
            'delstatus' => true,

        ]);
        return redirect('pelatihan');
    }
    public function Hapusdata($id)
{
    $varUsr = pelatihan::findOrFail($id);
    $varUsr->delete();
    return redirect('pelatihan');
}
}
