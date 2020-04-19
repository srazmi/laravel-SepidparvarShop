<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Factor_State extends Model
{
    public function Factor()
    {
        return $this->hasMany('App\Model\Factor');
    }
}
