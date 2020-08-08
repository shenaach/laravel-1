<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function form()
    {
        return view('form');
    }


    //Parameten Request . Objeknya $request untuk dapetin datanya
    public function selamatdatang(Request $request)
    {
        //dd($request->all());

        $firstname = $request["firstname"];
        $lastname = $request["lastname"];
        $nama_lengkap = "$firstname $lastname";
    
        //compact menerima variabel dikirim berupa string
        return view('selamatdatang', compact('nama_lengkap'));
    }

}
