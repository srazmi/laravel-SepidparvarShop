<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    public function Users()
    {
        return $this->belongsTo('App\Model\Users');
    }
    public function Faktor()
    {
        return $this->hasMany('App\Model\Faktor');
    }
}