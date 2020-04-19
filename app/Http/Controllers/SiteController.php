<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\Product;
use App\Model\Factor_Product;
use App\Model\Factor;
use App\Model\Roles;
use Illuminate\Support\Facades\DB;



class SiteController extends Controller
{
    public function ShowHomepage()
    {

        $factor= Factor::with('product','factor_product')->where('factorstate_id', '=', 2)->get();
        

        return view('home',compact('factor'));
    }
    public function ShowCategori($name , $id)
    {
    
        $product_id=Product::where('category_id', $id)->get();
        return view ('product.category',compact('product_id'));
    }
    public function ShowSubcategori($category ,$name ,$id)
    {
    
        $product_id=Product::where('id', $id)->get();
            return view ('Product.subcategory',compact('product_id'));
    }

    public function aboutus()
    {
        return view ("aboutus");   
    }
    public function contactus()
    {
        return view ("contactus");   
    }
    public function weblog()
    {
        return view ("weblog");   
    }
}
