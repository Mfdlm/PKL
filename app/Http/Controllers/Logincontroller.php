<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class Logincontroller extends Controller
{
    public function Tampillogin(){
        return view ('halaman.admin.login');
    }
    public function postLogin(Request $request)
    {
    if (Auth::attempt(
        [
            'email' => $request->email,
            'password' => $request->password,
        ]
    )) {
        return redirect('berandaadmin');
   }
    return redirect('login');
   }

public function logout()    
   {
    Auth::logout();
    return redirect('/');
}
    
}