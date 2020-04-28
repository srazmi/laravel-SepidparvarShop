<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Posts;


class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Posts::all();
        // dd($users);
        return view('layouts.Admin.Posts.ShowPosts',compact('posts'));
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
            'title'=>'required | string',
            'content'=>'required | string' ,    
        ]);
        $posts= new Posts;
        
        // $posts->id=$request->input('id');
        $posts->title=$request->input('title');
        $posts->content=$request->input('content');
        $posts->created_at=$request->input('created_at');
        $posts->updated_at=$request->input('updated_at');
// dd($posts);
        $posts->save();

        return response()->json([$posts]);
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
        $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        $num = range(0, 9);
        $convertedPersianNums = str_replace($persian, $num, $id);  //Convert Persian Numbers to English Numbers
       
        $posts= Posts::find($convertedPersianNums);

        $posts->title = $request->input('title');    
        $posts->content = $request->input('content');

        $posts->save();
        return response()->json([$posts]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        $num = range(0, 9);
        $convertedPersianNums = str_replace($persian, $num, $request->id);  //Convert Persian Numbers to English Numbers
        
        $posts= Posts::find($convertedPersianNums);
        // dd($posts);
        $posts->delete();

        return response()->json([$posts]);
    }
}
