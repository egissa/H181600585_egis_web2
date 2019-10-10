@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">galeri</div>

                <div class="card-body">
                <a href="{!! route ('galeri.create')!!}" class="btn  btn-sm btn-primary">
                Tambah Data
                </a>

                <body>
        <table border = '1'>
        <tr>
        <td>ID</td>
        <td>Nama</td>
        <td>keterangan</td>
        <td>path</td>
        <td>users_id</td>
        <td>Create</td>
        <td>update</td>
        <td>kategori_galeri_id</td>
        <td>klik</td>

        </tr>


        @foreach($listgaleri as $item)

        <tr>

        <td>{!! $item->id!!}</td>
        <td>{!! $item->nama!!}</td>
        <td>{!! $item->keterangan!!}</td>
        <td>{!! $item->path!!}</td>
        <td>{!! $item->users_id!!}</td>
        <td>{!! $item->created_at->format('d/m/Y H:i')!!}</td>
        <td>{!! $item->updated_at->format('d/m/Y H:i')!!}</td>
        <td>{!! $item->kategori_galeri_id!!}</td>
        
        <td>
        <a href="{!! route('galeri.show',[$item->id]) !!}" class="btn  btn-sm btn-primary">bosque</a>
        
        
       
        </tr>
        
        @endforeach
        </table>

    </body>

                  
                </div>
            </div>
        </div>
    </div>
    @endsection
