<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeri extends Model
{
    protected $table ='galeri';

    protected $fillable =[
        'nama','users_id'
    ];

    protected $casts=[
        
    ];
}
