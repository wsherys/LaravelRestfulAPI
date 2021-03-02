<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use DB;

class ArtikelController extends Controller
{
    
    public function index()
    {
        //
        return Artikel::all();
    }

    
    public function create(request $request)
    {
        //
        $artikel = new Artikel;
        $artikel->author=$request->author;
        $artikel->text=$request->text;
        $artikel->save();

        return "Data Berhasil Tersimpan";
    }

   
    public function store(Request $request)
    {
        //
    }

    
    public function show(Artikel $artikel, $id)
    {
        //
        return Artikel::find($id);
    }

    
    public function edit(Artikel $artikel, $id)
    {
        //
        return Artikel::find($id);

    }

    public function update(Request $request, Artikel $artikel, $id)
    {
        //
        $author = $request->author;
        $text = $request->text;
        
        $artikel = Artikel::find($id);
        $artikel->author = $author;
        $artikel->text = $text;
        $artikel->save();

        return "Data Berhasil di Update";
    }

    public function destroy(Artikel $artikel, $id)
    {
        //
        $artikel = Artikel::find($id);
        $artikel->delete();

        return "Data Berhasil di Hapus";
    }
}
