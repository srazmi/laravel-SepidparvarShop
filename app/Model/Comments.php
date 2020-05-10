<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
 
    protected $fillable=['comment','user_id','Commentable_id','Commentable_type'];
    
    public function Users()
    {
        return $this->belongsTo('App\Model\Users','user_id','id');
    }
    // public function Product()
    // {
    //     return $this->belongsTo('App\Model\Product');
    // }
    public function Commentable()
    {
        return $this->morphTo();
    }
}



