<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Models\Data;
use File;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Data::get();
        return view ('Pages.Create-Data.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('Pages.Create-Data.dataalumni');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
    		'nisn' => 'required',
    		'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'foto' => 'required|mimes:jpg,png,jpeg',
            'tahun_masuk' => 'required',
            'tahun_keluar' => 'required',
            'lanjut' => 'required',
            'dimana' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'catatan' => 'required',
    	]);

        $fileImage = time().'.'.$request->foto->extension();  
   
        $request->foto->move(public_path('image'), $fileImage);
        
        $data = new data;
 
        $data->nisn = $request->nisn;
        $data->nama = $request->nama;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->alamat = $request->alamat;
        $data->foto = $fileImage;
        $data->tahun_masuk = $request->tahun_masuk;
        $data->tahun_keluar  = $request->tahun_keluar;
        $data->lanjut = $request->lanjut;
        $data->dimana = $request->dimana;
        $data->email = $request->email;
        $data->no_telp = $request->no_telp;
        $data->catatan = $request->catatan;
 
        $data->save();

        Alert::success('Berhasil', 'Berhasil Menambahkan Data Alumni');

        return redirect('/data');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Data::find($id);
        return view ('Pages.Create-Data.detail', ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Data::find($id);
         return view ('Pages.Create-Data.edit', ['data' => $data]);
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
        $request->validate([
    		'nisn' => 'required',
    		'nama' => 'required',
            'jenis_kelamin' => '',
            'alamat' => 'required',
            'foto' => 'mimes:jpg,png,jpeg',
            'tahun_masuk' => 'required',
            'tahun_keluar' => 'required',
            'lanjut' => '',
            'dimana' => 'required',
            'email' => 'required',
            'no_telp' => 'required',
            'catatan' => '',
    	]);

        $data = Data::find($id);

        if($request->has('foto')){
            $path = 'image/';
            File::delete($path. $data->foto);

            $fileImage = time().'.'.$request->foto->extension();  
   
            $request->foto->move(public_path('image'), $fileImage);

            $data->foto = $fileImage;

            $data->save();
        }

        $data->nisn = $request['nisn'];
        $data->nama = $request['nama'];
        $data->jenis_kelamin = $request['jenis_kelamin'];
        $data->alamat = $request['alamat'];
        $data->tahun_masuk = $request['tahun_masuk'];
        $data->tahun_keluar = $request['tahun_keluar'];
        $data->lanjut = $request['lanjut'];
        $data->dimana = $request['dimana'];
        $data->email = $request['email'];
        $data->no_telp = $request['no_telp'];
        $data->catatan = $request['catatan'];
        
        
        $data->save();

        Alert::success('Berhasil', 'Berhasil Update Data Alumni');
        return redirect ('/data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Data::find($id);
        $path = 'image/';
            File::delete($path. $data->foto);
        $data->delete();
        
        Alert::success('Berhasil', 'Berhasil Menghapus Data Alumni');
        return redirect('/data');
    }
}
