@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">PENGUMUMAN</div>

                <div class="card-body">
<body>
<div class="form-group row">

<label  class="col-md-4 col-form-label text-md-right">ID</label>
<label  class="col-md-8 col-form-label text-md-left">{!! $pengumuman->id !!}</label>

</div>

<div class="form-group row">

<label  class="col-md-4 col-form-label text-md-right">Judul</label>
<label  class="col-md-8 col-form-label text-md-left">{!! $pengumuman->judul !!}</label>

</div>

<div class="form-group row">

<label  class="col-md-4 col-form-label text-md-right">isi</label>
<label  class="col-md-8 col-form-label text-md-left">{!! $pengumuman->isi !!}</label>

</div>

<div class="form-group row">

<label  class="col-md-4 col-form-label text-md-right">Users id</label>
<label  class="col-md-8 col-form-label text-md-left">{!! $pengumuman->users_id !!}</label>

</div>

<div class="form-group row">

<label  class="col-md-4 col-form-label text-md-right">created</label>
<label  class="col-md-8 col-form-label text-md-left">{!! $pengumuman->created_at->format ('d/m/Y H:i') !!}</label>

</div>

<div class="form-group row">

<label  class="col-md-4 col-form-label text-md-right">updated</label>
<label  class="col-md-8 col-form-label text-md-left">{!! $pengumuman->updated_at->format ('d/m/Y H:i') !!}</label>

</div>

<div class="form-group row">

<label  class="col-md-4 col-form-label text-md-right">kategori_pengumuman_id</label>
<label  class="col-md-8 col-form-label text-md-left">{!! $pengumuman->kategori_pengumuman_id !!}</label>

</div>

<div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                
                <a href="{!! route('pengumuman.index') !!}" class="btn btn-primary">
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
