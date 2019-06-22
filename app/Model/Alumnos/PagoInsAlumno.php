<?php

namespace App\Model\Alumnos;

use Illuminate\Database\Eloquent\Model;

class PagoInsAlumno extends Model
{
    //
    protected $table = 'vw_pago_ins_alumno';
    
    protected $fillable = [
        'IdAlu',
        'cur_desc',
        'plan_desc',
        'per_desc',
        'hor_desc',
        'alu_apemat',
        'alu_apepat',
        'alu_nom',
        'alu_idalu',
        'tp_pago',
        'costo',
        'dt_emi',
        'cos_tipcos',
        'IdCos',
        'IdTipCos'
    ];    
}
