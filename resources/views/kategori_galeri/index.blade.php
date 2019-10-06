@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">kategori galeri</div>

                <div class="card-body">
                <a href="{!! route ('kategori_galeri.create')!!}" class="btn  btn-sm btn-primary">
               
                Tambah Data
                </a>


                <body>
        <table border = '1'>
        <tr>
        <td>ID</td>
        <td>Nama</td>
        <td>Users</td>
        <td>Create</td>
        <td>Klik Here</td>        


        </tr>


        @foreach($listkategorigaleri as $item)

        <tr>

        <td>{!! $item->id!!}</td>
        <td>{!! $item->nama!!}</td>
        <td>{!! $item->users_id!!}</td>
        <td>{!! $item->created_at->format('d/m/Y H:i')!!}</td>
        <td>
        <a href="{!! route('kategori_galeri.show',[$item->id]) !!}" class="btn  btn-sm btn-primary">bosque</a>
        </td>
       
       

        </tr>
        
        @endforeach
        </table>

    </body>

                  
                </div>
            </div>
        </div>
    </div>
    @endsection
