@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">BERITA</div>

                <div class="card-body">
<body>
                <div class="form-group row">

                    <label  class="col-md-4 col-form-label text-md-right">ID</label>
                    <label  class="col-md-8 col-form-label text-md-left">{!! $berita->id !!}</label>

                </div>

                <div class="form-group row">

                <label  class="col-md-4 col-form-label text-md-right">Nama</label>
                <label  class="col-md-8 col-form-label text-md-left">{!! $berita->judul !!}</label>

                </div>

                <div class="form-group row">

                <label  class="col-md-4 col-form-label text-md-right">keterangan</label>
                <label  class="col-md-8 col-form-label text-md-left">{!! $berita->isi!!}</label>

                </div>

                <div class="form-group row">

                <label  class="col-md-4 col-form-label text-md-right">users_id</label>
                <label  class="col-md-8 col-form-label text-md-left">{!! $berita->users_id!!}</label>

                </div>
                <div class="form-group row">

                <label  class="col-md-4 col-form-label text-md-right">create</label>
                <label  class="col-md-8 col-form-label text-md-left">{!! $berita->created_at->format ('d/m/Y H:i') !!}</label>

                </div>

                <div class="form-group row">

                <label  class="col-md-4 col-form-label text-md-right">update</label>
                <label  class="col-md-8 col-form-label text-md-left">{!! $berita->updated_at->format ('d/m/Y H:i') !!}</label>

                </div>


                <div class="form-group row">

                <label  class="col-md-4 col-form-label text-md-right">Kategori berita ID</label>
                <label  class="col-md-8 col-form-label text-md-left">{!! $berita->kategori_berita_id !!}</label>

                </div>

              
         <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                
                <a href="{!! route('berita.index') !!}" class="btn btn-primary">
                  kembali
                  </a>
                </button>
</div>

                

</body>

                  
                </div>
            </div>
        </div>
    </div>
    @endsection
