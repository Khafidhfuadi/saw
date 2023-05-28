<?php

namespace App\Http\Controllers;

use App\Models\Departement;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function username()
    {
        return 'username';
    }

    //login
    public function login()
    {
        return view('auth/login');
    }

    //post
    public function loginPost(Request $request)
    {

        // dd($request->all());
        $credentials = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if (Auth::attempt($credentials)) {
            return redirect('/');
        }
        return back()->with('error', 'Username or Password is wrong!');
    }

    //register
    public function register()
    {
        // get records 'departement_nama' on table m_departement
        $departements = Departement::all();
        // get records m_pegawai
        $pegawai = Pegawai::select('m_pegawai.*', 'm_departement.departement_nama')
            ->join('m_departement', 'm_pegawai.departement_id', '=', 'm_departement.id')
            ->get();
        // dd($pegawai);

        return view('/add-user', [
            'departements' => $departements,
            'pegawai' => $pegawai
        ]);
        // return view('/add-user');
    }

    public function firstRg()
    {
        return view('auth/register');
    }

    //post

    public function registerPost(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama' => 'required',
            'departement' => 'required',
            'username' => 'required|unique:m_pegawai',
            'password' => 'required|min:6',
        ]);

        $pegawai = new \App\Models\Pegawai;
        $pegawai->nama = $request->nama;
        $pegawai->username = $request->username;
        $pegawai->departement_id = $request->departement;
        $pegawai->password = bcrypt($request->password);
        $pegawai->save();

        return redirect('login')->with('success', 'Register Success!, Please Login');
        // return back()->with('success', 'Register Success!');
    }

    public function firstRegist(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'nama' => 'required',
            // 'departement' => 'required',
            'username' => 'required|unique:m_pegawai',
            'password' => 'required|min:6',
        ]);

        $pegawai = new \App\Models\Pegawai;
        $pegawai->nama = $request->nama;
        $pegawai->username = $request->username;
        // $pegawai->departement_id = 1;
        // $pegawai->
        $pegawai->password = bcrypt($request->password);
        $pegawai->save();

        // return redirect('login')->with('success', 'Register Success!, Please Login');
        return back()->with('success', 'Register Success!');
    }

    //logout
    public function logout()
    {
        Auth::logout();
        return redirect('login');
    }
}
