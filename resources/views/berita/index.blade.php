@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">berita</div>

                <div class="card-body">
                <a href="{!! route ('berita.create')!!}" class="btn  btn-sm btn-primary">
                Tambah Data
                </a>

                <body>
        <table border = '1'>
        <tr>
        <td>ID</td>
        <td>Nama</td>
        <td>Users</td>
        <td>Kategori Berita ID</td>
        <td>Create</td>
        <td>Update</td>
        <td>Klik Here</td>

        </tr>


        @foreach($listberita as $item)

        <tr>

        <td>{!! $item->id!!}</td>
        <td>{!! $item->judul!!}</td>
        <td>{!! $item->users_id!!}</td>
        <td>{!! $item->kategori_berita_id!!}</td>
        <td>{!! $item->created_at->format('d/m/Y H:i')!!}</td>
        <td>{!! $item->updated_at->format('d/m/Y H:i')!!}</td>
        <td>
        <a href="{!! route('berita.show',[$item->id]) !!}" class="btn  btn-sm btn-primary">bosque</a>
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
