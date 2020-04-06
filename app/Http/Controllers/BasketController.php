<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categori;
use App\Models\Kala;

class BasketController extends Controller
{
    public function cart()
    {
        $categori=Categori::all();
        $kala=Kala::with('categori')->get();
        // dd($kala);
        $Temp['categori']=$categori;
        $Temp['kala']= $kala;
        return view ("basket.cart",compact('Temp'));

    }
    public function checkout()
    {
        $categori=Categori::all();
        $kala=Kala::with('categori')->get();
        // dd($kala);
        $Temp['categori']=$categori;
        $Temp['kala']= $kala;
        return view ("basket.checkout",compact('Temp'));

    }
    
}
