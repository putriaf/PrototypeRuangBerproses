<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "My Profile";
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . session('token'),
        ])->get('https://ruangberproses-be.herokuapp.com/api/profile');
        $response = $response->object();
        $profilUser = $response->profile;
        return view('/user/profile', compact(['title', 'profilUser']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $id = session()->get('id');
        $profilUser = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . session('token'),
        ])->get('https://ruangberproses-be.herokuapp.com/api/profile/' . session()->get('username') . '/edit');
        $profilUsers = $profilUser->object();
        $pass = null;
        $profil = null;
        $rules = [
            'nama' => 'required|max:255',
            'no_telp' => 'required|numeric|digits_between:10,14',
            'jk' => 'required|max:1',
            // 'posisi' => 'required|max:255',
        ];
        foreach ($profilUsers as $profilUser) {
            if ($request->username != $profilUser->username) {
                $rules['username'] = 'required|min:3|max:255|unique:users';
            }
            if ($request->email != $profilUser->email) {
                $rules['email'] = 'required|email:dns|unique:users';
            }

            if ($request->password != null) {
                $rules['password'] = 'required|min:3|max:255';
                $pass = Hash::make($request->password);
            }
            $validatedData = $request->validate($rules);

            if ($request->file('foto_profil')) {
                if ($request->oldImage) {
                    Storage::delete($request->oldImage);
                }
                $profil = $request->file('foto_profil')->store('foto-profil');
            }
        }
        $validatedData['id'] = $id;
        $response = Http::withHeaders([
            'Accept' => 'application/json',
            'Authorization' => 'Bearer ' . session('token'),
        ])
            ->asForm()->post("https://ruangberproses-be.herokuapp.com/api/profile/" . session()->get('id') . '?_method=PUT', [
                'nama' => $request->input('nama'),
                'username' => $request->input('username'),
                'no_telp' => $request->input('no_telp'),
                'email' => $request->input('email'),
                'jk' => $request->input('jk'),
                'password' => $pass,
                'foto_profil' => $profil,
            ]);
        $resp = $response->object();
        if ($response->status() == 200) {
            $response = $resp->data;
            $username = $response->username;
            $foto_profil = $response->foto_profil;
            session(['username' => $username]);
            session(['foto_profil' => $foto_profil]);
            return redirect('/profile')->with('success', 'Profil berhasil diupdate!');
        }
        return redirect('/profile/' . session()->get('username') . '/edit')->with('success', 'Profil berhasil diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}