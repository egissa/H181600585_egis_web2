<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\berita;

class beritacontroller extends Controller
{
    public function index(){
        $listberita=berita::all();
  
        return view('berita.index',compact('listberita'));
    }

    public function show($id){

        $berita=berita::find($id);
    
        return view ('berita.show',compact('berita'));
    
    }

    public function create(){

        return view ('berita.create');
    }
        public function store(request $request){
        
            $input= $request->all();
    
            berita::create($input);
    
    
        return redirect(route('berita.index'));
    }
    
}
