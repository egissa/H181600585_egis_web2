<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pengumuman;

class pengumumancontroller extends Controller
{
    public function index(){

        $listpengumuman=pengumuman::all();
  
        return view('pengumuman.index',compact('listpengumuman'));
    }
    public function show($id){

        $pengumuman=pengumuman::find($id);
    
        return view ('pengumuman.show',compact('pengumuman'));
    
    }
    public function create(){
        $pengumuman=pengumuman::pluck('judul','isi','kategori_pengumuman_id');    


        return view ('pengumuman.create');
    }
        public function store(request $request){
        
            $input= $request->all();
    
            pengumuman::create($input);
    
    
        return redirect(route('pengumuman.index'));

}
    
   
    
};
