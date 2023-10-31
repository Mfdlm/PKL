<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sektorusaha;

class Sektorcontroller extends Controller
{
    public function Tampilsektorusaha(){
        $sekt = sektorusaha::where('delstatus','=',true)->latest()->get();
        return view ('halaman.admin.sektor.sektorusaha', compact('sekt'));
    }
    public function Tambahsektor(){
        return view ('halaman.admin.sektor.tambahsektor');
    }
    public function Simpansektor(Request $request)
    {
        sektorusaha::create([
            'sektor_usaha' => $request->sektor_usaha,
            'delstatus' => true,

        ]);
        return redirect('sektorusaha');
    }
    public function Hapusdata($id)
{
        $varUsr = sektorusaha::findOrFail($id);
        $varUsr->delete();
        return redirect('sektorusaha');
}
}
