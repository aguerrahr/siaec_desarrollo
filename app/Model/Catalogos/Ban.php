<?php

namespace App\Model\Catalogos;

use Illuminate\Database\Eloquent\Model;

class Ban extends Model
{
    //
    protected $table = 'ban';
    protected $primaryKey = 'IdBan';
    protected $fillable = [
         'ban_nomban', 'ban_nomsuc','ban_idest'
    ];
    public $timestamps = false;
}
