<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use DB;

class PertanyaanController extends Controller
{
    public function create(){
        return view('pertanyaan.create');
    }
    //Gunakan Query Builder kayak syntax SQL
    //Simpan data : insert
    public function store(Request $request){
        //dd($request->all());
        //error handling -> validation
           $request->validate([
               'judul' => 'required|unique:pertanyaan',
               'isi' => 'required'
           ]);
        $query = DB::table('pertanyaan')->insert([
            "judul" => $request["judulpertanyaan"],
            "isi" => $request["isipertanyaan"]
            ]);
            return redirect('/pertanyaan')->with('success', 'Pertanyaan Berhasil Disimpan');
    }
    public function index(){
        $pertanyaan = DB::table('pertanyaan')->get(); //sama dgn select * from pertanyaan
        //dd($pertanyaan);
        return view('pertanyaan.index', compact('pertanyaan'));
    }
    public function show($pertanyaan_id){
        $tanya = DB::table('pertanyaan')->where('id', $pertanyaan_id)->first();
        //dd($pertanyaan);
        return view('pertanyaan.show', compact('tanya'));
    }
    public function edit($pertanyaan_id){
        $tanya = DB::table('pertanyaan')->where('id', $pertanyaan_id)->first();
        return view('pertanyaan.edit', compact('tanya'));
    }
    public function update($pertanyaan_id, Request $request){
        $request->validate([
            'judul' => 'required|unique:pertanyaan',
            'isi' => 'required'
        ]);
        $query = DB::table('pertanyaan')
                    ->where('id', $pertanyaan_id)
                    ->update([
                        'judul' => $request['judulpertanyaan'],
                        'isi' => $request['isipertanyaan']
                    ]);
        return redirect('/pertanyaan')->with('success', 'Pertanyaan Berhasil di Update');
    }
    public function destroy($pertanyaan_id){
        $query = DB::table('pertanyaan')->where('id', $pertanyaan_id)->delete();
        return redirect('/pertanyaan')->with('success', 'Peranyaan Berhasil di Hapus');
    }
}
