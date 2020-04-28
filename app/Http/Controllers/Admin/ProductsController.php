<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Category;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        $products = Product::with('category')->get();
        // dd($users);
        return view('layouts.Admin.Products.ShowProduct',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required | string',
            'description'=>'required | string' ,
            'price'=>'required',
            'number'=>'required',
            
        ]);
        $products= new Product;
        
        $products->id=$request->input('id');
        $products->name=$request->input('name');
        $products->description=$request->input('description');
        $products->category_id=$request->input('category');
        $products->price=$request->input('price');
        $products->number=$request->input('number');

        $products->save();

        return response()->json([$products]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd(parseInt($request->id));
        // dd(($request->$request->input('id')));
        $products= Product::find(3);
        $category_id = Category::find($id->category);

dd($category_id);
        // $products->id=$request->input('id');
        $products->name = $request->input('name');    
        $products->description = $request->input('description');
        $products->category_id = $category_id;
        $products->price = $request->input('price');
        $products->number = $request->input('number');

        $products->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
