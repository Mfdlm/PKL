<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\skpdpengampu;

class Skpdcontroller extends Controller
{
    public function Tampilskpdpengampu(){
        $skpd = skpdpengampu::where('delstatus','=',true)->latest()->get();
        return view ('halaman.admin.skpd.skpdpengampu', compact('skpd'));
    }
    public function Tampiltambahskpd(){
        return view ('halaman.admin.skpd.tambahskpd');
    }
    public function Simpanskpd(Request $request)
    {
        skpdpengampu::create([
            'skpd_pengampu' => $request->skpd_pengampu,
            'delstatus' => true,

        ]);
        return redirect('skpdpengampu');
}
public function Hapusdata($id)
{
    $varUsr = skpdpengampu::findOrFail($id);
    $varUsr->delete();
    return redirect('skpdpengampu');
}
}
