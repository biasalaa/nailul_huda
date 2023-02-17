<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');
    }

    public function auth(Request $request){
        $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ],
        [
            'email' => 'username tidak boleh kosong',
            'password' => 'username tidak boleh kosong'
        ]
        )    ;

        $user = DB::table('users')->where('email', $request->email)->first();

        if ($user) {
            if(Hash::check($request->password, $user->password)){
                if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'admin'])) {
                    return redirect('/NAILUL-HUDA/dashboard');
                }
                elseif(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'pengurus'])){
                    return redirect('/NAILUL-HUDA/dashboard');
                }
                elseif(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 'ketu'])){
                    return redirect('/NAILUL-HUDA/dashboard');
                }
            }
        }
        else {
            return redirect()->back()->with('error',"User tidak ditemukan");
        }
    }
}
