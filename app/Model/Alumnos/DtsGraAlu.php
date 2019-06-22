<?php

namespace App\Model\Alumnos;

use Illuminate\Database\Eloquent\Model;

class DtsGraAlu extends Model
{
    //
    protected $table = 'vw_dts_alumno';
    
    protected $fillable = [
        'cur_desc',
        'plan_desc',
        'per_desc',
        'hor_desc',
        'alu_apemat',
        'alu_apepat',
        'alu_nom',
        'datcur_nomcalle',
        'datcur_numcalle',
        'datcur_colonia',
        'datcur_alcaldia',
        'datcur_entidadfed',
        'datcur_cp',
        'datcur_telcasa',
        'datcur_celular',
        'datcur_teltutor',
        'datcur_email',
        'datcur_sexo',
        'datcur_fechnac',
        'datcur_entnac',
        'datcur_secupro',
        'datcur_escopc1',
        'darcur_escopc2',
        'datcur_escopc3',
        'datcur_obs',
        'IdAlu',
        'alu_idalu',
        'datcur_curp',
        'try_est',
        'st_trayectoria',
        'IdCurPlan',
        'curpla_idhor',
        'IdTra',
        'datcur_folescban'
    ];    
}
