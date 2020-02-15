<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\User;
use Auth;


class AuthController extends Controller
{

    public function register()
    {
        return view('auths.register');
    }

    public function postregister(Request $request)
    {
        $this->validate(request(),[
            'name'              => 'required',
            'email'             => 'required',
            'password'          => 'required|confirmed',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password
        ]);
        
        Auth()->login($user);
        
        $id = Auth::user()->id;
        $passwordUpdate = User::where('id', $id)
                            ->update([
                                'password' => Hash::make(request()->password)
                        ]);

        return redirect()->to('admin')->with('status','Berhasil Membuat Akun!');

    }
    
    public function login()
    {
        return view('auths.login');
    }

    public function postlogin(Request $request)
    {
        // return $request;
        if(Auth::attempt($request->only('email', 'password'))){
            return redirect('/admin');
        }
        return redirect('/login')->with('statuslogin', 'Email atau password salah!');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
