@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">pengumuman</div>

                <div class="card-body">
                <a href="{!! route ('pengumuman.create')!!}" class="btn  btn-sm btn-primary">
                Tambah Data</a>

                <body>
        <table border = '1'>
        <tr>
        <td>ID</td>
        <td>judul</td>
        <td>isi</td>
        <td>users_id</td>
        <td>Created</td>
        <td>updated</td>
        <td>kategori_pengumuman_id</td>
        <td>Klik Here</td>

        </tr>


        @foreach($listpengumuman as $item)

        <tr>

        <td>{!! $item->id!!}</td>
        <td>{!! $item->judul!!}</td>
        <td>{!! $item->isi!!}</td>
        <td>{!! $item->users_id!!}</td>
        <td>{!! $item->created_at->format('d/m/Y H:i')!!}</td>
        <td>{!! $item->updated_at->format('d/m/Y H:i')!!}</td>
        <td>{!! $item->kategori_pengumuman_id!!}</td>
        
        <td>
        <a href="{!! route('pengumuman.show',[$item->id]) !!}" class="btn  btn-sm btn-primary">bosque</a>
        
        
       
        </tr>
        
        @endforeach
        </table>

    </body>

                  
                </div>
            </div>
        </div>
    </div>
    @endsection
