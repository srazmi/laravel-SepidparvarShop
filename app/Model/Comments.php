<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
 
    protected $fillable=['comment','user_id'];
    
    public function Users()
    {
        return $this->belongsTo('App\Model\Users','user_id','id');
    }
    public function Product()
    {
        return $this->belongsTo('App\Model\Product');
    }
}
