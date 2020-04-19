<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Model\Category;
use App\Model\Product;
use App\Model\Gender;
use App\Model\Baskets;



class ChannelsComposer
{
    public function compose(View $view)
    {
        $category=Category::all();
        $Product=Product::with('category')->get();
        $genders=Gender::all();
        $basket=Baskets::getcontent(1);
        // $price=0;
        // foreach($basket as $item)
        // {
        //     $price=$price + $item->num* $item->Product()->get()->first()->price;
        // }
        // dd($price);die;

        $Temp['category']=$category;
        $Temp['Product']= $Product;
        $Temp['genders']= $genders;
        $Temp['basket']= $basket;
        // $Temp['price']=$price;
        
        $view->with('Temp',$Temp);
    }
}
