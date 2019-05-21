<?php

namespace App\Model\Catalogos;

use Illuminate\Database\Eloquent\Model;

class Hor extends Model
{
     //
     protected $table = 'hor';
     protected $primaryKey = 'IdHor';
     protected $fillable = [
         'hor_desc', 'hor_idest','hor_fehcalt','hor_fechbaj'
     ];
     public $timestamps = false;
}
