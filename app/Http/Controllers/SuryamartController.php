<?php

namespace App\Http\Controllers;

use App\Models\Katalog;
use Illuminate\Http\Request;
use App\Models\sejarah;
use App\Models\galeri;

class SuryamartController extends Controller
{
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
}
