<?php

namespace App\Model\Catalogos;

use Illuminate\Database\Eloquent\Model;

class Cal extends Model
{
    //
       //
       protected $table = 'cal';
       protected $primaryKey = 'IdCal';
       protected $fillable = [
           'cal_idanio',
           'cal_idmes',
           'cal_idfase',
           'cal_idest',
           'cal_est'
       ];
       public $timestamps = false;
}
