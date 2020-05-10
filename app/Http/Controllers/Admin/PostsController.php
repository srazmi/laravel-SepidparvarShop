<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

use App\Model\Posts;
use App\Model\Photoes;


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
        // foreach ($posts as $post){
        //     dd($post->photoes()->first()->path);
        // }
        
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
        // dd($request->file('select_file'));
        $request->validate([
            'title'=>'required | string',
            'content'=>'required | string' , 
            'select_file'=>'required | image | mimes:jpeg,png,jpg,gif |max:2048'   
        ]);

        $posts= new Posts();
        $posts->title=$request->title;
        $posts->content=$request->content;
// dd($posts);
        $posts->save();

        if ($request->file('select_file')) 
        {
            $files = $request->file('select_file');
            $imagename = $files->getClientOriginalName();
            $files->move('assets/images/posts/', $imagename);
            $posts->photoes()->create(['path' => 'assets/images/posts/' . $imagename, 'imageable_id' => $posts->id]);
        }

        $posts = Posts::with('photoes')->get();
        // dd($posts);
        $photos = array();
        foreach ($posts as $post)
        {
            array_push($photos, Photoes::where('imageable_id',$post->id)->first()->path);
        }

        return response()->json(['posts'=>$posts,'photos'=>$photos]);
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
    public function update(Request $request)
    {
        dd($request);
        // $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
        // $num = range(0, 9);
        // $convertedPersianNums = str_replace($persian, $num, $id);  //Convert Persian Numbers to English Numbers
       
        $posts= Posts::find($convertedPersianNums);
// dd($request);
        $posts->title = $request->input('title');    
        $posts->content = $request->input('content');
        $posts->select_file = $request->input('select_file');
// dd($posts);
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
