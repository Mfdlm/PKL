<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\pegawai;
use Auth;

class Dataadmincontroller extends Controller
{
    public function Tampiladmin()
    {
        $usr = User::with('pegawai')->where('delstatus', '=', true)->latest()->get();
        return view('halaman.admin.dataadmin.dataadmin', compact('usr'));
    }

    public function Tambahadmin()
    {
        $pegawai = pegawai::where('delstatus', '=', true)->latest()->get();
        return view('halaman.admin.dataadmin.tambahadmin', compact('pegawai'));
    }

    public function Editadmin($id)
    {
        $usr = User::findOrFail($id);
        $pegawai = pegawai::all();
        return view('halaman.admin.dataadmin.editadmin', compact('usr', 'pegawai'));
    }

    public function Simpanadmin(Request $request)
    {
        User::create([
            'name' => $request->name,
            'pegawai_id' => $request->pegawai_id,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect('dataadmin');
    }

    public function Simpanperubahan(Request $request, $id)
    {
        $usr = User::findOrFail($id);
        $data = [
            'name' => $request->name,
            'pegawai_id' => $request->pegawai_id,
            'email' => $request->email,
        ];
        if ($request->has('password')) {
            $data['password'] = $request->password;
        }

        $usr->update($data);

        return redirect('dataadmin');
    }

    public function Hapusdata($id)
    {
        $usr = User::findOrFail($id);
        $usr->delete();
        return redirect('dataadmin');
    }
}
