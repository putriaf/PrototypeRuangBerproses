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
        $response = Http::asForm()->post('http://127.0.0.1:8080/api/login', [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ]);
        $status = $response->status();
        if($status == 200){
            $response = $response->object();
            $token = $response->access_token;
            $role = $response->role;
            $id = $response->id;
            $username = $response->username;
            $foto_profil = $response->foto_profil;
            session(['token' => $token]);
            session(['role' => $role]);
            session(['id' => $id]);
            session(['username' => $username]);
            session(['foto_profil' => $foto_profil]);
            return redirect()->intended('/');
        }
        return back()->with('loginError', 'Login failed!');
    }

    public function logout(Request $request)
    {
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . session('token'),
        ])->post('http://127.0.0.1:8080/api/logout');
        $request->session()->flush();
        // Auth::logout();
        return redirect('/');
    }
}
