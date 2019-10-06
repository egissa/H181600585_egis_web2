<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\artikel;
class artikelcontroller extends Controller
{
    public function index(){
        $listartikel=artikel::all();
  
        return view('artikel.index',compact('listartikel'));
    }
    
    public function show($id){

        $artikel=artikel::find($id);
    
        return view ('artikel.show',compact('artikel'));
    
    }

        public function create(){
        $artikel=artikel::pluck('judul','isi','kategori_artikel.id');    

        return view ('artikel.create',compact('artikel'));
    }
        public function store(request $request){
        
            $input= $request->all();
    
            artikel::create($input);
    
    
        return redirect(route('artikel.index'));
    }
    
}
