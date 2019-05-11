<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Est extends Model
{
    //
    //
    protected $table = 'est';
    protected $primaryKey = 'IdEst';
    protected $fillable = [
        'Est_UsuDesc'
    ];
    public $timestamps = false;
}
