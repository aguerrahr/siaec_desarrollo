<?php

namespace App\Model\Catalogos;

use Illuminate\Database\Eloquent\Model;

class Curplan extends Model
{
    //
    protected $table = 'curpla';
    protected $primaryKey = 'IdCurPlan';
    protected $fillable = [
         'curpla_idcurso', 'curpla_idplan','curpla_idper','curpla_idhor','curpla_idest','curpla_fechalt','curpla_fechbaj'
    ];
    public $timestamps = false;
}
