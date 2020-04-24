<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Query extends Model
{
    public static function BestSoldeAllProducts()
    {
        return DB::table('factor')->where('factorstate_id', '=', 2)
            ->leftJoin('factor_product','factor.id','=','factor_product.factor_id')
            ->selectRaw('factor_product.product_id, COALESCE(sum(factor_product.num),0) total')
            ->groupBy('factor_product.product_id')
            ->orderBy('total','desc')
            ->take(6)
            ->get();
    }
    public static function BestSoldeselectedCategory($id)
    {
        return DB::table('factor')->where('factorstate_id', '=', 2)
            ->leftJoin('products','product.category_id','=',$id)
            ->leftJoin('factor_product','factor.id','=','factor_product.factor_id')
            ->selectRaw('factor_product.product_id, COALESCE(sum(factor_product.num),0) total')
            ->groupBy('factor_product.product_id')
            ->orderBy('total','desc')
            ->take(6)
            ->get();
    }
    
    public static function MostPopularAllProduct($id)
    {
        return DB::table('factor')->where('factorstate_id', '=', 2)
            ->leftJoin('products','product.category_id','=',$id)
            ->leftJoin('factor_product','factor.id','=','factor_product.factor_id')
            ->selectRaw('factor_product.product_id, COALESCE(sum(factor_product.num),0) total')
            ->groupBy('factor_product.product_id')
            ->orderBy('total','desc')
            ->take(6)
            ->get();
    }
}
