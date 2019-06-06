<?php

namespace App\Model\Alumnos;

use Illuminate\Database\Eloquent\Model;

class DatCur extends Model
{
    //
     //
     protected $table = 'datcur';
     protected $primaryKey = 'IdDatCur';
     protected $fillable = [
        'datcur_idalu',
        'datcur_curp',
        'datcur_nomcalle',
        'datcur_numcalle',
        'datcur_colonia',
        'datcur_alcaldia',
        'datcur_entidadfed',
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
        'datcur_folescban'
     ];
     public $timestamps = false;
}
