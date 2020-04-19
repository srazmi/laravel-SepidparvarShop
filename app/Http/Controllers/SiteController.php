<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categori;
use App\Models\Kala;
use App\Models\Faktor_Kala;
use App\Models\Faktor;
use App\Models\Roles;
use Illuminate\Support\Facades\DB;



class SiteController extends Controller
{
    public function ShowHomepage()
    {
        // $product=Kala::with('faktor')->where('ptype_id', '=', 1)->get();
        // $faktor= Faktor::where('faktorstate_id', '=', 2)->get();
        
        // $total= Faktor_Kala::with('faktor')->sum('faktor_kala.num')->get();
        // dd($total);
        // $product=Kala::with('faktor_kala')->get();
        // dd($product);
        $faktor= Faktor::with('kala','faktor_kala')->where('faktorstate_id', '=', 2)->get();
        // dd($faktor);
        // $total= $faktor->faktor_kala()->get()->first()->num;
        
        // dd($total);
        
        // $T['product']= $product;
        // $T['faktor']= $faktor;
        // $Temp['total']= $total;
        // foreach($faktor as $f)
        // {
        //     dd($f->faktor_kala()->get()->first()->num);
        // }
        // $count= count($faktor);
        // $sales = DB::table('faktor_kala')
        //     ->Join('faktor','faktor.id','=','faktor_kala.faktor_id')
        //     ->join('kala','kala.id','=','faktor_kala.kala_id')
        //     ->where('faktor.faktorstate_id', '=', 2)
        //     ->selectRaw('kala.name,kala.description,kala.price, sum(faktor_kala.num) total')
        //     ->groupBy('faktor_kala.kala_id','kala.name','kala.description','kala.price')
        //     ->orderBy('total','desc')
        //     ->take(5)
        //     ->get();
        // dd($faktor);
        
        return view('home',compact('faktor'));
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
