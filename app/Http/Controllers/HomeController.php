<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categori;
use App\Models\Kala;

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
        $categori=Categori::all();
        $kala=Kala::with('categori')->get();
        // dd($kala);
        $Temp['categori']=$categori;
        $Temp['kala']= $kala;
        return view ("home",compact('Temp')); 
    }
}
