<?php

namespace App\Model\Alumnos;

use Illuminate\Database\Eloquent\Model;

class DtsHorGpo extends Model
{
    //
    protected $table = 'vw_dts_hor_gpo';
    
    protected $fillable = [
        'IdGpo',
        'hor_idest',
        'plan_desc',
        'gpo_idcurplan',
        'cur_desc',
        'hor_desc',
        'gpo_idhor'
    ];    
}
