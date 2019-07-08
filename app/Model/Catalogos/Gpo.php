<?php

namespace App\Model\Catalogos;

use Illuminate\Database\Eloquent\Model;

class Gpo extends Model
{
    //
    protected $table = 'gpo';
    protected $primaryKey = 'IdGpo';
    protected $fillable = [
        'IdGpo',
        'gpo_idcurplan',
        'gpo_idmat',
        'gpo_prof',
        'gpo_idest',
        'gpo_fechalt',
        'gpo_fechbaj',
        'gpo_area',
        'gpo_cupo',
        'gpo_idhor',
        'gpo_cont_cupo',
        'gpo_nombre'
    ];
    public $timestamps = false;
}
