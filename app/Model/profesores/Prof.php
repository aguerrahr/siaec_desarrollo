<?php

namespace App\Model\Profesores;

use Illuminate\Database\Eloquent\Model;

class Prof extends Model
{
       //
       protected $table = 'prof';
       protected $primaryKey = 'IdProf';
       protected $fillable = [
        'prof_idprof',
        'prof_nom',
        'prof_apepat',
        'prof_apemat',
        'prof_pass',
        'prof_mail',
        'prof_idest',
        'prof_fechalt',
        'prof_fechbaj'
       ];
       public $timestamps = false;
}