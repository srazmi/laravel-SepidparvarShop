<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Baskets;

class Baskets extends Model
{
    public $timestamps=false;
    
    protected $fillable=['num','kala_id'];

    public function Kala()
    {
        return $this->belongsTo('App\Models\Kala');
    }

    public function User()
    {
        return $this->belongsTo('App\User');
    }

    //============================= Other Function ==============================

    // public static function add($kala_id,$user_id)
    // {
    //     $CurrentUser=User::find(auth()->id());

    //     $result=Baskets::where('user_id','=',$CurrentUser)
    //                     ->where('kala_id','=',$kala_id)
    //                     ->get()
    //                     ->first();
    //     if($result)
    //     {            
    //         $result->increment('num');
    //         $result->save();
    //     }
    //     else
    //     {
    //         $addkala=new Baskets;
    //         $addkala->kala_id=$kala_id;
    //         $addkala->user_id=$user_id;
    //         $addkala->num=1;
    //         $addkala->save();
    //     }    
    // }
}
