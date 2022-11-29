<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Katalog;
use App\Models\Suryateam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuryamartController extends Controller
{
    public function login()
    {
        return view('login.login');
    }

    public function loginproses(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|exists:users,email',
            'password' => 'required',
        ]);
        if (Auth::attempt($request->only('email', 'password'))) {
            return redirect('/welcome')->with('success', 'Login Berhasil!');
        } else {
            return redirect()->back()->with('password', 'password salah');
        }
    }



    public function register()
    {
        return view('daftar.register');
    }

    // public function registeruser(Request $request)
    // {
    //     $this->validate($request, [
    //         'name' => 'required|max:150',
    //         'email' => 'required|unique:users,email',
    //         'password' => 'required|min:5|max:50',
    //     ], [
    //         'name.required' => 'Nama harus diisi',
    //         'name.unique' => ' Nama sudah dipakai',
    //         'email.unique' => 'Email sudah dipakai',
    //         'email.required' => 'Email harus diisi',
    //         'password.required' => 'Sandi harus diisi',
    //     ]);
    //     User::create([
    //         'name' => $request->name,
    //         'email' => $request->email,
    //         'password' => bcrypt($request->password),
    //         'foto' => 'noimg.png',
    //         'foto_bg' => 'header.jpg',
    //         'role' => 'user',
    //         'remember_token' => Str::random(60),

    //     ]);
    //     return redirect('/login')->with('toast_success', 'Berhasil daftar!');
    // }

    public function logout()
    {
        Auth::logout();
        return redirect('login')->with('toast_success', 'Anda berhasil logout!');
        
    }
    
    



    
    public function katalog() {
        $katalog = Katalog::paginate(16);
        return view('katalog.katalog', compact('katalog'));
    }

    public function adminkatalog() {
        $datakatalog = Katalog::all();
        return view('promokatalog.adminkatalog.adminkatalog', compact('datakatalog'));
    }
    public function tambahkatalog() {
        return view('promokatalog.adminkatalog.tambahkatalog');
    }
    public function hubungikami() {
        return view('hubungikami.hubungikami');
    }
    public function promo() {
        return view('promokatalog.promo');
    }



























    public function loby() {
        $data2 = Suryateam::all();
        return view('team.admin-surya', compact('data2'));
    }
    public function tambahteam()
    {
        return view('team.tambah-team');
    }

    public function submitdata(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'foto_team' =>'required',
            'nama_team' =>'required',
            'jabatan' =>'required',
            // 'fb' =>'required',
            // 'wa' =>'required',
            // 'ig' =>'required',
        ],[
            'foto_team.required' =>'Harus diisi',
            'nama_team.required' =>'Harus diisi',
            'jabatan.required' =>'Harus diisi',
            // 'fb.required' =>'Harus diisi',
            // 'wa.required' =>'Harus diisi',
            // 'ig.required' =>'Harus diisi',

        ]);
        $data2 = Suryateam::create([
            'foto_team' =>$request->foto_team,
            'nama_team' =>$request->nama_team,
            'jabatan' =>$request->jabatan,
            'link_fb' =>$request->link_fb,
            'link_wa' =>$request->link_wa,
            'link_ig' =>$request->link_ig,

        ]);
        if($request->hasFile('foto_team')){
            $request->file('foto_team')->move('fotosuryamart/', $request->file('foto_team')->getClientOriginalName());
            $data2->foto_team = $request->file('foto_team')->getClientOriginalName();
            $data2->save();
        }

        return redirect()->route('teamsurya')->with('success',' Data Berhasil di Tambahkan!');
    }

    public function editteam($id){

        $data2 = Suryateam::findOrFail($id);
        return view('upjtekaje.team.edit-team', compact('data2'));
    }

    public function submitedit(Request $request, $id){
        $this->validate($request,[
            'nama_team' =>'required',
            'jabatan_team' =>'required',
            'fb' =>'required',
            'wa' =>'required',
            'ig' =>'required',
        ],[
            'nama_team' =>'harus diisi',
            'jabatan_team' =>'harus diisi',
            'fb_team' =>'harus diisi',
            'wa_team' =>'harus diisi',
            'ig_team' =>'harus diisi',

        ]);
        $data2 = Suryateam::find($id);
        $data2->update([
            'nama_team' =>$request->nama_team,
            'jabatan_team' =>$request->jabatan_team,
            'fb' =>$request->fb,
            'wa' =>$request->wa,
            'ig' =>$request->ig,
        ]);
        if($request->hasFile('foto_team')){
            $request->file('foto_team')->move('fotomahasiswa/',$request->file('foto_team')->getClientOriginalName());
            $data2->foto_team = $request->file('foto_team')->getClientOriginalName();
            $data2->save();
        }

        return redirect('teamsurya')->with('success',' Data Berhasil di Ubah!');

    }

    public function deleteteam($id){
        $data2 = Suryateam::find($id);
        $data2->delete();
        return redirect('teamsurya')->with('toast_error',' Data Berhasil di Hapus!');
    }













}
