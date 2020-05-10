<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Send_State extends Model
{
    public $table= 'send_state';

    public function Faktor()
    {
        return $this->hasMany('App\Model\Faktor','id','sendstate_id');
    }
}
