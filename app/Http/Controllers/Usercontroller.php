<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\formulir;
use App\Models\skpdpengampu;
use App\Models\sektorusaha;
use App\Models\pelatihan;
use App\Models\kecamatan;
use App\Models\kelurahan;

class Usercontroller extends Controller
{
    public function welcome(){
        $data = formulir::count();
        $fashion = formulir::where('sektorusaha_id', '7')->get()->count();
        $kriya = formulir::where('sektorusaha_id', '8')->get()->count();
        $musik = formulir::where('sektorusaha_id', '9')->get()->count();
        $despro = formulir::where('sektorusaha_id', '10')->get()->count();
        $kuliner = formulir::where('sektorusaha_id', '11')->get()->count();
        $pengper = formulir::where('sektorusaha_id', '12')->get()->count();
        $desin = formulir::where('sektorusaha_id', '13')->get()->count();
        $senrup = formulir::where('sektorusaha_id', '14')->get()->count();
        $fav = formulir::where('sektorusaha_id', '15')->get()->count();
        $fotgraf = formulir::where('sektorusaha_id', '16')->get()->count();
        $deskom = formulir::where('sektorusaha_id', '17')->get()->count();
        $tv = formulir::where('sektorusaha_id', '18')->get()->count();
        $arsi = formulir::where('sektorusaha_id', '20')->get()->count();
        $iklan = formulir::where('sektorusaha_id', '21')->get()->count();
        $senper = formulir::where('sektorusaha_id', '22')->get()->count();
        $terbit= formulir::where('sektorusaha_id', '23')->get()->count();
        $apk = formulir::where('sektorusaha_id', '24')->get()->count();
        return view('welcome', compact('data', 'kuliner', 'fashion', 'kriya', 'musik', 'despro', 'pengper', 'desin', 'senrup', 'fav', 'fotgraf', 'deskom', 'tv', 'arsi', 'iklan', 'senper', 'terbit', 'apk'));
    }
    public function Tampildata(){
        $form = formulir::where('delstatus','=',true)->latest()->get();
        return view('halaman.data',compact('form'));
    }
    public function Tambahformulir(){
        $sekt = sektorusaha::where('delstatus','=',true)->latest()->get();
        $skpd = skpdpengampu::where('delstatus','=',true)->latest()->get();
        $plth = pelatihan::where('delstatus','=',true)->latest()->get();
        $kec = kecamatan::where('delstatus','=',true)->latest()->get();
        $kel = kelurahan::where('delstatus','=',true)->latest()->get();
        return view ('halaman.formulir',compact('sekt','skpd','plth','kec','kel'));
    }

    public function kirim(Request $request)
    {
        formulir::create([
            'nik' => $request->nik,
            'name' => $request->name,
            'nama_usaha' => $request->nama_usaha,
            'no_hp' => $request->no_hp,
            'jenis_kelamin' => json_encode($request->input('jenis_kelamin')),
            'alamat_usaha' => $request->alamat_usaha,
            'kecamatan_id' => $request->kecamatan_id,
            'kelurahan_id' => $request->kelurahan_id,
            'jenispelatihan_id' => $request->jenispelatihan_id,
            'nama_Kel' => $request->nama_Kel,
            'thn_pelatihan' => $request->thn_pelatihan,
            'skpdpengampu_id' => $request->skpdpengampu_id, 
            'sektorusaha_id' => $request->sektorusaha_id,
            'plth_yg_prnh_ikut' => $request->plth_yg_prnh_ikut,
            'delstatus' => true,

        ]);
        return redirect('data');
    }
}
