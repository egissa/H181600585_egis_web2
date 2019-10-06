@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">kategori berita</div>

                <div class="card-body">
<body>
<div class="form-group row">

<label  class="col-md-4 col-form-label text-md-right">ID</label>
<label  class="col-md-8 col-form-label text-md-left">{!! $kategoriberita->id !!}</label>

</div>

<div class="form-group row">

<label  class="col-md-4 col-form-label text-md-right">Nama</label>
<label  class="col-md-8 col-form-label text-md-left">{!! $kategoriberita->nama !!}</label>

</div>

<div class="form-group row">

<label  class="col-md-4 col-form-label text-md-right">Users id</label>
<label  class="col-md-8 col-form-label text-md-left">{!! $kategoriberita->users_id !!}</label>

</div>

<div class="form-group row">

<label  class="col-md-4 col-form-label text-md-right">create</label>
<label  class="col-md-8 col-form-label text-md-left">{!! $kategoriberita->created_at->format ('d/m/Y H:i') !!}</label>

</div>

<div class="form-group row">

<label  class="col-md-4 col-form-label text-md-right">update</label>
<label  class="col-md-8 col-form-label text-md-left">{!! $kategoriberita->updated_at->format ('d/m/Y H:i') !!}</label>

</div>

<div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                
                <a href="{!! route('kategori_berita.index') !!}" class="btn btn-primary">
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
