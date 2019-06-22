<?php

namespace App\Model\Catalogos;

use Illuminate\Database\Eloquent\Model;

class Suc extends Model
{
    //
    protected $table = 'suc';
    protected $primaryKey = 'IdSuc';
    protected $fillable = [
        'suc_idban',
        'suc_desc',
        'suc_est',
        'suc_fechalt',
        'suc_fecbaj'
    ];
    public $timestamps = false;
}
