<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\galeri;

class galericontroller extends Controller
{
    public function index(){
        $listgaleri=galeri::all();
  
        return view('galeri.index',compact('listgaleri'));
    }
    
    public function show($id){

        $galeri=galeri::find($id);
    
        return view ('galeri.show',compact('galeri'));
    
    }
    public function create(){
         $galeri=galeri::pluck('judul','isi','kategori_galeri_id');    


        return view ('galeri.create');
    }
        public function store(request $request){
        
            $input= $request->all();
    
            galeri::create($input);
    
    
        return redirect(route('galeri.index'));
    }
    
}
