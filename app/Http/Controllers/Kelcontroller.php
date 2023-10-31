<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kelurahan;

class Kelcontroller extends Controller
{
    public function Tampilkelurahan(){
        $kel = kelurahan::where('delstatus','=',true)->latest()->get();
        return view ('halaman.admin.kelurahan.kelurahan', compact('kel'));
    }
    public function Tampiltambahkel(){
        return view ('halaman.admin.kelurahan.tambahkel');
    }
    public function Simpankel(Request $request)
    {
        kelurahan::create([
            'kelurahan' => $request->kelurahan,
            'delstatus' => true,

        ]);
        return redirect('kelurahan');
    }
    public function Hapusdata($id)
{
    $varUsr = kelurahan::findOrFail($id);
    $varUsr->delete();
    return redirect('kelurahan');
}
}
