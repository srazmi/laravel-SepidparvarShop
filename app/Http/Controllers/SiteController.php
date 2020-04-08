<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categori;
use App\Models\Kala;


class SiteController extends Controller
{
    public function ShowHomepage()
    {
        $categori=Categori::all();
        $kala=Kala::with('categori')->get();
        // dd($kala);
        $Temp['categori']=$categori;
        $Temp['kala']= $kala;
        
        return view('home',compact('Temp'));
    }

    public function ShowCategori($name , $id)
    {
        // dd($id);
        $kala_id=Kala::where('categori_id', $id)->get();

        $cate_id=Categori::where('id', $id)->get();

        $categori=Categori::all();
        $kala=Kala::with('categori')->get();
        // dd($kala);
        $Temp['cate_id']= $cate_id;
        $Temp['kala_id']= $kala_id;
        
        $Temp['categori']=$categori;
        $Temp['kala']= $kala; 
        
        // dd($Temp);

        return view ('kala.categori',compact('Temp'));
    }

    public function ShowSubcategori($categori ,$name ,$id)
    {
        // dd($id);
        $kala_id=Kala::where('id', $id)->get();
        // dd($kala_id);
        // $cate_id=Categori::where('id', $id)->get();
        // dd($cate_id);

        $categori=Categori::all();
        // dd($categori);
        $kala=Kala::with('categori')->get();
        // dd($kala);
        // $Temp['cate_id']= $cate_id;
        $Temp['kala_id']= $kala_id;
        
        $Temp['categori']=$categori;
        $Temp['kala']= $kala; 
        
        // dd($Temp);

        return view ('kala.subcategori',compact('Temp'));
    }

    public function aboutus()
    {
        $categori=Categori::all();
        $kala=Kala::with('categori')->get();
        // dd($kala);
        $Temp['categori']=$categori;
        $Temp['kala']= $kala;
        return view ("aboutus",compact('Temp'));   
    }
    public function contactus()
    {
        $categori=Categori::all();
        $kala=Kala::with('categori')->get();
        // dd($kala);
        $Temp['categori']=$categori;
        $Temp['kala']= $kala;
        return view ("contactus",compact('Temp'));   
    }
    public function weblog()
    {
        $categori=Categori::all();
        $kala=Kala::with('categori')->get();
        // dd($kala);
        $Temp['categori']=$categori;
        $Temp['kala']= $kala;
        return view ("weblog",compact('Temp'));   
    }
}
