<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'no_telp' => 'required|numeric|digits_between:10,14',
            'jk' => 'required|max:1',
            'password' => 'required|min:5|max:255',
            'role' => 'required',
        ]);

        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        // User::create($validatedData);
        $response = Http::asForm()->post("http://ruangberproses-be.herokuapp.com/api/register", [
            'nama' => $request->input('nama'),
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'no_telp' => $request->input('no_telp'),
            'password' => Hash::make($request->input('password')),
            'role' => $request->input('role'),
            'jk' => $request->input('jk')
        ]);
        if($response->status()==200){
            return redirect('/login')->with('success', 'Registration successful, please login!');
        }
    }
}
