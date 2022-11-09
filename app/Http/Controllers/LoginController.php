<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function authenticate(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:8|max:50',
        ]);

        $response = Http::asForm()->post('https://ruangberproses-be.herokuapp.com/api/login', [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);
        $status = $response->status();
        if ($status == 200) {
            $response = $response->object();
            $token = $response->access_token;
            $role = $response->role;
            $id = $response->id;
            $username = $response->username;
            $foto_profil = $response->foto_profil;
            $nama = $response->nama;
            $no_telp = $response->no_telp;
            $tgl_lahir = $response->tgl_lahir;
            $jk = $response->jk;
            $email = $response->email;
            session(['token' => $token]);
            session(['role' => $role]);
            session(['id' => $id]);
            session(['username' => $username]);
            session(['foto_profil' => $foto_profil]);
            session(['nama' => $nama]);
            session(['no_telp' => $no_telp]);
            session(['tgl_lahir' => $tgl_lahir]);
            session(['jk' => $jk]);
            session(['email' => $email]);
            return redirect()->intended('/');
        }
        return back()->with('loginError', 'Login failed!');
    }

    public function logout(Request $request)
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . session('token'),
        ])->post('https://ruangberproses-be.herokuapp.com/api/logout');
        $request->session()->flush();
        // Auth::logout();
        return redirect('/');
    }
}