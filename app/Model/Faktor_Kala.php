<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faktor_Kala extends Model
{
    public $table= 'Faktor_Kala';

    public function Faktor()
    {
        return $this->belongsTo('App\Models\Faktor');
    }

    public function Kala()
    {
        return $this->belongsTo('App\Models\Kala');
    }
}
