<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\Categori;
use App\Models\Kala;
use App\Models\Gender;


class ChannelsComposer
{
    public function compose(View $view)
    {
        $categori=Categori::all();
        $kala=Kala::with('categori')->get();
        $genders=Gender::all();
        // $user = $this->userGetter();
        // $activitys = $user->userActivitys;

        $Temp['categori']=$categori;
        $Temp['kala']= $kala;
        // $Temp['user']= $user;
        // $Temp['activitys']= $activitys;
        $Temp['genders']= $genders;
        
        $view->with('Temp',$Temp);
    }
}
