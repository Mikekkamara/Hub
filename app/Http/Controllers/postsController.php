<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\likes;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Date;

class postsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //Look up the  (user_id) on the users table and display the name
        // $user_name = User::find($user_id)->first()->name;
        // ddd($user_name);

        $post = Post::all();
        $hey = Post::all()->first();
        return view('home')->with([
            'posts'=>$post,
            'hey'=>$hey
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd(Auth::user()->name);
        $post = Post::create([
            'user_id'=>Auth::user()->id,
            'User_name'=>Auth::user()->name,
            'title'=>$request->input('title'),
            'body'=>$request->input('body')
        ]);
        // $res = Post::all()->id;
        // dd($res);
        // $like = likes::create([
        //     'post_id'=>Post::all()->id,
        //     'likes'=>0
        // ]);

        return redirect('/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $st = Post::find($id)->all();
        $st = Post::all()->where('user_id' ,$id);
        // ddd($st);
        return view('layouts.show')->with([
            'posts'=>$st
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = Post::find($id);
        // ddd($edit);
        return view('layouts.edit')->with([
            'post'=>$edit
        ]);
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
        $post = Post::where('id', $id)->update([
        'title'=>$request->input('title'),
        'body'=>$request->input('body')
        ]);


        return redirect('/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd('works');
        $del = Post::find($id)->first();
        $del->delete();

        return redirect('/home');
    }

    public function like($id){
        $res = Post::find($id)->likes;
        $add = Post::where('id', $id)->update([
            'likes'=>$res + 1
        ]);
        return redirect('/home');

    }


}
