<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Category;
use App\Model\Product;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $category=Category::all();
        $kala=Product::with('category')->get();
        // dd($kala);
        $Temp['category']=$category;
        $Temp['kala']= $kala;
        return view ("home",compact('Temp')); 
    }
}
