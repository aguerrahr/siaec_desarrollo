<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Per extends Model
{
     //
     protected $table = 'per';
     protected $primaryKey = 'IdPer';
     protected $fillable = [
         'per_idper', 'per_desc','per_idest','per_fechalt','per_fechbaj'
     ];
     public $timestamps = false;
}
