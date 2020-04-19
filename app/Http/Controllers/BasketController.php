<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categori;
use App\Models\Kala;
use App\Models\Baskets;
use App\User;

class BasketController extends Controller
{
    public function cart()
    {
        return view ("basket.cart");

    }
    public function checkout()
    {
        return view ("basket.checkout");

    }
    public function AddToCart($id)
    {
        // dd($id);
        $CurrentUser=User::findOrFail(auth()->id());
        // dd($CurrentUser);
        Baskets::add($id,$CurrentUser);
        $Category=Categori::all();
        $Product=Kala::all();
        $T['Category']= $Category;
        $T['Product']= $Product;
        return redirect('basket.cart')->with('T', $T);   
    }
    
}
