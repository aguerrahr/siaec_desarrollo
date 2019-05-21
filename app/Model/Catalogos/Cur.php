<?php

namespace App\Model\Catalogos;

use Illuminate\Database\Eloquent\Model;

class Cur extends Model
{
    //
    protected $table = 'cur';
    protected $primaryKey = 'IdCur';
    protected $fillable = [
         'cur_desc', 'cur_idest','cur_fechalt','cur_fechbaj'
    ];
    public $timestamps = false;
}
