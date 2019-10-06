<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategorigaleri;

class kategorigalericontroller extends Controller
{
    public function index(){
        $listkategorigaleri=kategorigaleri::all();

        return view('kategori_galeri.index',compact('listkategorigaleri'));
}
public function show($id){

    $kategorigaleri=kategorigaleri::find($id);

    return view ('kategori_galeri.show',compact('kategorigaleri'));
 }

    public function create(){

    return view ('kategori_galeri.create');
}
    public function store(request $request){
    
        $input= $request->all();

        kategorigaleri::create($input);


    return redirect(route('kategori_galeri.index'));
}


}
