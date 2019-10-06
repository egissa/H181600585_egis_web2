<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class artikel extends Model
{
    protected $table ='artikel';

    protected $fillable =[
        'judul','isi','users_id','created_at','update_at','kategori_artikel.id'
    ];

    protected $casts=[
        
    ];
}
