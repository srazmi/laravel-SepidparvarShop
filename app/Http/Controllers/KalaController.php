<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categori;
use App\Models\Kala;


class KalaController extends Controller
{

    public function DryFruit()
    {
        return view ("kala/dry-fruits");   
    }
    public function SourDelicious()
    {
        return view ("kala/sour-delicious");   
    }
    public function SweetDelicious()
    {
        return view ("kala/sweet-delicious");   
    }
    public function Adviye()
    {
        return view ("kala/adviye");   
    }
    public function Chashny()
    {
        return view ("kala/chashny");   
    }
    public function Drink()
    {
        return view ("kala/drink");   
    }
    public function DryVegteble()
    {
        return view ("kala/dry-vegteble");   
    }
    public function Hobubat()
    {
        return view ("kala/hobubat");   
    }

    
    public function Badam()
    {
        // if($name == 'badam')
        // dd($name);
        return view ("kala/badam");   
    }
    
}
