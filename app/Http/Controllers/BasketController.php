<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\Product;
use App\Model\Baskets;
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
    public function AddToCart(Request $request)
    {

        $CurrentUser=User::find(auth()->id());
        dd($request->id);
        Baskets::AddToBasket($request->id,1);
        return view('Product.category');   
    }
}
