<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Kala extends Model
{
    public $timestamps = false;
    public $table= 'Kala';
    public function Users()
    {
        return $this->belongsToMany(Users::class, 'baskets');
    }

    public function Categori()
    {
        return $this->belongsTo('App\Models\Categori','categori_id','id');
    }

    public function Comment()
    {
        return $this->hasMany('App\Models\Comment');
    }

    public function Baskets()
    {
        return $this->hasMany('App\Models\Baskets');
    }

    public function Faktor()
    {
        return $this->belongsToMany(Faktor::class, 'Faktor_Kala');
    }

    public function Faktor_Kala()
    {
        return $this->hasMany('App\Models\Faktor_Kala');
    }
    
    public function Backed_Kala()
    {
        return $this->hasMany('App\Models\Backed_Kala');
    }

    public function photos()
    {    
        return $this->morphMany('App\Models\Photos','imageable');
    }

    public function tags()
    {
        return $this->morphtoMany("App\Models\Tags","taggable");
    }

    //========================== Other Relations ===================================

    public function getShortDescriptionAttribute()
    {
        return Str::limit($this->description, 21, '...');
    }
}
