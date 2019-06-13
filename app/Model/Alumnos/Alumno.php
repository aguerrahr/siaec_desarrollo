<?php

namespace App\Model\Alumnos;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    //
    protected $table = 'alu';
    protected $primaryKey = 'IdAlu';
    protected $fillable = [
         'alu_idalu', 'alu_nom','alu_apemat','alu_apepat','alu_idest','alu_fechalt','alu_fechbaj'
    ];
    public $timestamps = false;
}
