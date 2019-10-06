<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategoriberita;

class kategoriberitacontroller extends Controller
{
    public function index(){
        $listkategoriberita=kategoriberita::all();

        return view('kategori_berita.index',compact('listkategoriberita'));

    }
   
    public function show($id){

        $kategoriberita=kategoriberita::find($id);

        return view ('kategori_berita.show',compact('kategoriberita'));
    
}
    public function create(){

    return view ('kategori_berita.create');
}
    public function store(request $request){
    
        $input= $request->all();

    kategoriberita::create($input);


    return redirect(route('kategori_berita.index'));
}

};

