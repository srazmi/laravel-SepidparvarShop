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
        $faktor= Faktor::with('kala','faktor_kala')->where('faktorstate_id', '=', 2)->get();

        $sales = DB::table('faktor_kala')
            ->Join('faktor','faktor.id','=','faktor_kala.faktor_id')
            ->join('kala','kala.id','=','faktor_kala.kala_id')
            ->where('faktor.faktorstate_id', '=', 2)
            ->selectRaw('kala.name,kala.description,kala.price,kala.id, sum(faktor_kala.num) total')
            ->groupBy('faktor_kala.kala_id','kala.name','kala.description','kala.price','kala.id')
            ->orderBy('total','desc')
            ->take(5)
            ->get();
        // dd($sales);
        
        return view('home',compact('sales'));
    }

    public function ShowCategori($name , $id)
    {
        // dd($id);
        $kala_id=Kala::where('categori_id', $id)->get();

        return view ('kala.categori',compact('kala_id'));
    }

    public function ShowSubcategori($categori ,$name ,$id)
    {
        // dd($id);
        $kala_id=Kala::where('id', $id)->get();

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

    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|min:3',
        ]);

        $query= $request->input('query');           //get request from user
        // dd($query);
        $products= Kala::where('name', 'LIKE', "%$query%")->paginate(6)
                        ->orwhere('description', 'LIKE', "%$query%")
                        ->paginate(6);

        return view('search.search-results',compact('products'));
    }
}
