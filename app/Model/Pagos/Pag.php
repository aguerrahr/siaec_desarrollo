<?php

namespace App\Model\Pagos;

use Illuminate\Database\Eloquent\Model;

class Pag extends Model
{
    //
    protected $table = 'pag';
    protected $primaryKey = 'IdPag';
    protected $fillable = [
        'pag_idtraalu',
        'pag_idcos',
        'pag_idcal',
        'pag_idsuc',
        'pag_folio',
        'pag_folaut',
        'pag_fechpag',
        'pag_fechent',
        'pag_fechalt',
        'pag_fechbaj'
    ];
    public $timestamps = false;
}

