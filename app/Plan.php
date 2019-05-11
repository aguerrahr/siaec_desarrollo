<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    //
    protected $table = 'plan';
    protected $primaryKey = 'Idplan';
    protected $fillable = [
        'plan_desc', 'plan_idest','plan_fechalt','plan_fechbaj'
    ];
    public $timestamps = false;
}
