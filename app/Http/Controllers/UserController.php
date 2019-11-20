<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Hash;
use DB;

class UserController extends Controller
{

    // <awal> BUKA FORM LOGIN & REGISTER
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function formLogin()
    {
        $title = 'Masuk Ke Sistem';
        return view('home.login',compact('title'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function formRegister()
    {
        $title = 'Daftar Ke Sistem';
        return view('home.register',compact('title'));
    }
    //<akhir> BUKA FORM LOGIN & REGISTER





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }






    //<awal> POST LOGIN & REGISTER    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function loginPost(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $cekEmail = User::where('email',$email)->first();


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function registerPost(Request $request)
    {
        
        $messages = [
            'email.required' => 'Mohon Masukkan Email Anda',         
            'email.email' => 'Mohon Masukkan Format Email Yang Benar',     
            'nama.required' => 'Mohon Masukkan Nama Anda',     
            'noHp.required' => 'Mohon Masukkan Nomor HP Anda',     
            'noHp.numeric' => 'Nomor HP Harus Terdiri Dari Angka',     
            'alamat.required' => 'Mohon Masukkan Alamat Anda',     
            'password.required' => 'Mohon Masukkan Password Anda',
            'password.size' => 'Password Harus Terdiri Dari 8 Karakter'
        ];
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|size:8',
            'nama' => 'required',
            'noHp' => 'required|numeric',
            'alamat' => 'required'
        ],$messages);

        $email = $request->email;
        $password = Hash::make($request->password);
        $nama = $request->nama;
        $noHp = $request->noHp;
        $alamat = $request->alamat;

        DB::table('users')->insert([
            'email'=>$email,
            'password'=>$password,
            'nama'=>$nama,
            'noHp'=>$noHp,
            'alamat'=>$alamat,
            'created_at' => now()
        ]);

        return redirect('/')->with('status', 'Anda Berhasil Registrasi Akun!');
    }
    //<akhir> POST LOGIN & REGISTER







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
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
