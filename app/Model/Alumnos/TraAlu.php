<?php

namespace App\Model\Alumnos;

use Illuminate\Database\Eloquent\Model;

class TraAlu extends Model
{
     //
     protected $table = 'traalu';
     protected $primaryKey = 'IdTra';
     protected $fillable = [
          'try_idcurplan', 'try_idalu','try_cal','try_est','try_fechalt','try_fechbaj'
     ];
     public $timestamps = false;
}
