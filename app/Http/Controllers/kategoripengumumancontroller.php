<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\kategoripengumuman;

class kategoripengumumancontroller extends Controller
{
    public function index(){
        $listkategoripengumuman=kategoripengumuman::all();

        return view('kategori_pengumuman.index',compact('listkategoripengumuman'));
}
public function show($id){

    $kategoripengumuman=kategoripengumuman::find($id);

    return view ('kategori_pengumuman.show',compact('kategoripengumuman'));

}
    public function create(){

    return view ('kategori_pengumuman.create');
}
    public function store(request $request){
    
        $input= $request->all();

        kategoripengumuman::create($input);


    return redirect(route('kategori_pengumuman.index'));
}
};
