<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Factor extends Model
{
    public $table= 'factor';
    protected $fillable = [
        'id', 'user_id', 'num','ptype_id', 'factorstate_id', 'sendstate_id',
     ];

    public function Product()
    {
        return $this->belongsToMany(Product::class, 'Factor_Product');
    }

    public function User()
    {
        return $this->belongsTo('App\User','user_id','id');
    }

    public function Backed_Product()
    {
        return $this->hasMany('App\Model\Backed_Product');
    }

    public function Peyment_Type()
    {
        return $this->belongsTo('App\Model\Peyment_Type');
    }

    public function Send_State()
    {
        return $this->belongsTo('App\Model\Send_State','sendstate_id','id');
    }

    public function Factor_State()
    {
        return $this->belongsTo('App\Model\Factor_State','factorstate_id','id');
    }

    public function Address()
    {
        return $this->belongsTo('App\Model\Address');
    }
    
    public function Payment_Gateway()
    {
        return $this->belongsToMany(Payment_Gateway::class, 'Transaction');
    }

    public function Factor_Product()
    {
        return $this->hasMany('App\Model\Factor_Product');
    }
}
