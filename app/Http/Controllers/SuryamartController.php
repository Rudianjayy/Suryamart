<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\User;
use App\Models\promo;
use App\Models\Slider;
use App\Models\Katalog;
use App\Models\sejarah;
use App\Models\Suryateam;
use Illuminate\Http\Request;
use App\Models\galeri;
use App\Models\Kontak;
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
    // public function promo() {
    //     return view('promokatalog.promo');
    // }


    public function sejarah() {
        $sejarah = sejarah::all();
        return view('sejarah.sejarah',compact('sejarah'));
    }
    public function adminsejarah() {
        $data = sejarah::all();
        return view('sejarah.adminsejarah', compact('data'));
    }
    public function tambahsejarah()
    {
        return view('sejarah.tambahsejarah');
    }

    public function sejarahproses2(Request $request){
        $this->validate($request,[
            'deskripsi' =>'required',
        ],[
            'deskripsi.required' =>'Harus diisi',

        ]);
        $data = sejarah::create([
            'deskripsi' =>$request->deskripsi,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('adminsejarah')->with('success',' Data Berhasil di Tambahkan!');
    }

    public function editsejarah($id){

        $data = sejarah::findOrFail($id);
        return view('sejarah.editsejarah', compact('data'));
    }

    public function editproses2(Request $request, $id){
        $this->validate($request,[
            'deskripsi' =>'required',
        ],[
            'deskripsi' =>'harus diisi',

        ]);
        $data = sejarah::find($id);
        $data->update([
            'deskripsi' =>$request->deskripsi,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('adminsejarah')->with('success',' Data Berhasil di Ubah!');

    }

    public function deletesejarah($id){
        $data = sejarah::find($id);
        $data->delete();
        return redirect('adminsejarah')->with('success',' Data Berhasil di Hapus!');
    }


    public function galeri() {
        $galeri = galeri::all();
        return view('galeri.galeri',compact('galeri'));
    }
    public function admingaleri() {
        $data = galeri::all();
        return view('galeri.admingaleri', compact('data'));
    }
    public function tambahgaleri()
    {
        return view('galeri.tambahgaleri');
    }

    public function galeriproses1(Request $request){
        // dd($request->all());
        $this->validate($request,[

            'foto' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
        ],[

            'foto.required' =>'Harus diisi',
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',

        ]);
        $data = galeri::create([
            'foto' =>$request->foto,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('admingaleri')->with('success',' Data Berhasil di Tambahkan!');
    }

    public function editgaleri($id){

        $data = galeri::findOrFail($id);
        return view('galeri.editgaleri', compact('data'));
    }

    public function editproses1(Request $request, $id){
        $this->validate($request,[

            'foto' =>'mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
        ],[

            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',

        ]);
        $data = galeri::find($id);
        $data->update([
            'foto' =>$request->foto,

        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('admingaleri')->with('success',' Data Berhasil di Ubah!');

    }

    public function deletegaleri($id){
        $data = galeri::find($id);
        $data->delete();
        return redirect('admingaleri')->with('success',' Data Berhasil di Hapus!');
    }




    //slider//

    public function slider() {
        $slider = Slider::all();
        return view('slider.slider',compact('slider'));
    }
    public function adminslider() {
        $data = Slider::all();
        return view('slider.adminslider', compact('data'));
    }
    public function tambahslider()
    {
        return view('slider.tambahslider');
    }

    public function sliderproses5(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'deskripsi' =>'required',
            'foto' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
        ],[
            'deskripsi.required' =>'Harus diisi',
            'foto.required' =>'Harus diisi',
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',

        ]);
        $data = Slider::create([
            'deskripsi' =>$request->deskripsi,
            'foto' =>$request->foto,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('adminslider')->with('success',' Data Berhasil di Tambahkan!');
    }

    public function editslider($id){

        $data = Slider::findOrFail($id);
        return view('slider.editslider', compact('data'));
    }

    public function editslider5(Request $request, $id){
        $this->validate($request,[
            'deskripsi' =>'required',
            'foto' =>'mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
        ],[
            'deskripsi.required' =>'Harus diisi',
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',

        ]);
        $data = Slider::find($id);
        $data->update([
            'deskripsi' =>$request->deskripsi,
            'foto' =>$request->foto,

        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('adminslider')->with('success',' Data Berhasil di Ubah!');

    }

    public function deleteslider($id){
        $data = Slider::find($id);
        $data->delete();
        return redirect('adminslider')->with('success',' Data Berhasil di Hapus!');
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






    public function promo() {
        $promo = promo::all();
        return view('promo.promo',compact('promo'));
    }
    public function adminpromo() {
        $data = promo::all();
        return view('promo.adminpromo', compact('data'));
    }
    public function tambahpromo()
    {
        return view('promo.tambahpromo');
    }

    public function promoproses3(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'foto' =>'required|mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
        ],[
            'foto.required' =>'Harus diisi',
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',

        ]);
        $data = promo::create([
            'foto' =>$request->foto,
        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect()->route('adminpromo')->with('success',' Data Berhasil di Tambahkan!');
    }

    public function editpromo($id){

        $data = promo::findOrFail($id);
        return view('promo.editpromo', compact('data'));
    }

    public function editpromo5(Request $request, $id){
        $this->validate($request,[
            'foto' =>'mimes:jpg,jpeg,bmp,gif,png,webp|max:1024',
        ],[
            'foto.mimes' =>'Harus jpg,jpeg,bmp,gif,png,webp',

        ]);
        $data = promo::find($id);
        $data->update([
            'foto' =>$request->foto,

        ]);
        if($request->hasFile('foto')){
            $request->file('foto')->move('fotomahasiswa/',$request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }

        return redirect('adminpromo')->with('success',' Data Berhasil di Ubah!');

    }

    public function deletepromo($id){
        $data = promo::find($id);
        $data->delete();
        return redirect('adminpromo')->with('success',' Data Berhasil di Hapus!');
    }






    public function loby2(){
        $data3 = Kontak::all();
        return view('kontak.admin-kontak', compact('data3'));
    }
    public function tambahkontak()
    {
        return view('kontak.tambah-kontak');
    }

    public function submitdata2(Request $request){
        // dd($request->all());
        $this->validate($request,[
            'judul' =>'required',
            'link' =>'required',
        ],[
            'judul.required' =>'Harus diisi',
            'link.required' =>'Harus diisi',

        ]);
        $data3 = Kontak::create([
            'judul' =>$request->judul,
            'link' =>$request->link,
        ]);

        return redirect()->route('kontak')->with('success',' Data Berhasil di Tambahkan!');
    }

    public function editkontak($id){

        $data3 = Kontak::findOrFail($id);
        return view('kontak.edit-kontak', compact('data3'));
    }

    public function editprosesdua(Request $request, $id){
        $this->validate($request,[
            'link' =>'required',
        ],[
            'link' =>'harus diisi',

        ]);
        $data3 = Kontak::find($id);
        $data3->update([
            'link' =>$request->link,
        ]);

        return redirect('kontak')->with('success',' Data Berhasil di Ubah!');

    }

    public function delete($id){
        $data3 = Kontak::find($id);
        $data3->delete();
        return redirect('kontak')->with('success',' Data Berhasil di Hapus!');
    }






    public function loby3(){
        $data4 = About::all();
        return view('about.admin-about', compact('data4'));
    }
    public function editabout($id){

        $data4 = About::findOrFail($id);
        return view('about.edit-about', compact('data4'));
    }

    public function submitedit3(Request $request, $id){
        // $this->validate($request,[
        //     'link' =>'required',
        // ],[
        //     'link' =>'harus diisi',

        // ]);
        $data4 = About::find($id);
        $data4->update([
            'link_map' =>$request->link_map,
            'link_ig' =>$request->link_ig,
            'link_fb' =>$request->link_fb,
            'email' =>$request->email,
            'notelpon' =>$request->notelpon,
            'alamat' =>$request->alamat,
            'penjelasan' =>$request->penjelasan,
        ]);
        if($request->hasFile('foto_about')){
            $request->file('foto_about')->move('fotosuryamart/',$request->file('foto_about')->getClientOriginalName());
            $data4->foto_about = $request->file('foto_about')->getClientOriginalName();
            $data4->save();
        }

        return redirect('about')->with('success',' Data Berhasil di Ubah!');

    }

    public function deleteabout($id){
        $data4 = About::find($id);
        $data4->delete();
        return redirect('about')->with('success',' Data Berhasil di Hapus!');
    }




}
