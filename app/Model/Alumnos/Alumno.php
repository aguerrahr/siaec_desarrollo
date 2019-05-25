<?php

namespace App\Model\Alumnos;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //
    protected $table = 'alu';
    protected $primaryKey = 'IdAlu';
    protected $fillable = [
         'alu_idalu', 'alu_nom','curpla_idper','curpla_idhor','curpla_idest','curpla_fechalt','curpla_fechbaj'
    ];
    public $timestamps = false;
}
