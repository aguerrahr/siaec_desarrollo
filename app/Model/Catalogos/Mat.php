<?php

namespace App\Model\Catalogos;

use Illuminate\Database\Eloquent\Model;

class Mat extends Model
{
    //
    protected $table = 'mat';
    protected $primaryKey = 'IdMat';
    protected $fillable = [
        'mat_desc',
        'mat_idest',
        'mat_fechalt',
        'mat_fechbaj',
        'mat_matricula'
    ];
    public $timestamps = false;
}
