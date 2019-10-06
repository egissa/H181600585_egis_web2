<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\kategoriArtikel;

class KategoriArtikelController extends Controller
{
    public function index(){
        $listKategoriArtikel=KategoriArtikel::all();
  
        return view('kategori_artikel.index',compact('listKategoriArtikel'));
    }
    public function show($id){

        //$kategoriartikel=KategoriArtikel::where('id',$id)->first();
        $kategoriartikel=KategoriArtikel::find($id);

        return view ('kategori_artikel.show',compact('kategoriartikel'));
    }
        public function create(){

            return view ('kategori_artikel.create');
        }
        public function store(request $request){
           $input= $request->all();

           KategoriArtikel::create($input);


            return redirect(route('kategori_artikel.index'));
        }
    
};
