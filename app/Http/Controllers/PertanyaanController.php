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
            "judul" => $request["judul"],
            "isi" => $request["isi"]
            ]);
            return redirect('/pertanyaan')->with('success', 'Pertanyaan Berhasil Disimpan');
    }
    public function index(){
        $pertanyaan = DB::table('pertanyaan')->get(); //sama dgn select * from pertanyaan
        //dd($pertanyaan);
        return view('pertanyaan.index', compact('pertanyaan'));
    }
    public function show($pertanyaan_id){
        $pertanyaan = DB::table('pertanyaan')->where('id', $pertanyaan_id)->first();
        //dd($pertanyaan);
        return view('pertanyaan.show', compact('pertanyaan'));
    }
    public function edit($pertanyaan_id){
        $pertanyaan = DB::table('pertanyaan')->where('id', $pertanyaan_id)->first();
        return view('pertanyaan.edit', compact('pertanyaan'));
    }
    public function update($pertanyaan_id, Request $request){
          $request->validate([
            //   'judul' => ['required', Rule::unique('pertanyaan')->ignore($pertanyaan_id)],
              'judul' => 'required|unique:pertanyaan',
              'isi' => 'required'
          ]);
        $pertanyaan = DB::table('pertanyaan')
                    ->where('id', $pertanyaan_id)
                    ->update([
                        'judul' => $request['judul'],
                        'isi' => $request['isi']
                    ]);
        return redirect('/pertanyaan')->with('success', 'Pertanyaan Berhasil di Update');
    }
    public function destroy($pertanyaan_id){
        $pertanyaan = DB::table('pertanyaan')->where('id', $pertanyaan_id)->delete();
        return redirect('/pertanyaan')->with('success', 'Peranyaan berhasil di Hapus');
    }
}
