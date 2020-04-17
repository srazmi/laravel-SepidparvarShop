<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categori;
use App\Models\Kala;
use App\Models\Faktor_Kala;
use App\Models\Faktor;
use App\Models\Roles;



class SiteController extends Controller
{
    public function ShowHomepage()
    {
        // $product=Kala::with('faktor')->where('ptype_id', '=', 1)->get();
        // $faktor= Faktor::where('ptype_id', '=', 1)->get();

        // dd($product);
        
        return view('home');
    }

    public function ShowCategori($name , $id)
    {
        // dd($id);
        $kala_id=Kala::where('categori_id', $id)->get();

        // $cate_id=Categori::where('id', $id)->get();

        // $categori=Categori::all();
        // $kala=Kala::with('categori')->get();
        // // dd($kala);
        // $Temp['cate_id']= $cate_id;
        // $Temp['kala_id']= $kala_id;
        
        // $Temp['categori']=$categori;
        // $Temp['kala']= $kala; 
        
        // dd($Temp);

        return view ('kala.categori',compact('kala_id'));
    }

    public function ShowSubcategori($categori ,$name ,$id)
    {
        // dd($id);
        $kala_id=Kala::where('id', $id)->get();
        // dd($kala_id);
        // $cate_id=Categori::where('id', $id)->get();
        // dd($cate_id);

        // $categori=Categori::all();
        // dd($categori);
        // $kala=Kala::with('categori')->get();
        // dd($kala);
        // $Temp['cate_id']= $cate_id;
        // $Temp['kala_id']= $kala_id;
        
        // $Temp['categori']=$categori;
        // $Temp['kala']= $kala; 
        
        // dd($Temp);

        return view ('kala.subcategori',compact('kala_id'));
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
