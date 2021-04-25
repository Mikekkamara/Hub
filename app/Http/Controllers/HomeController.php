<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\likes;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */


    public function index($id)
    {
        // find the related post by the id passed from the view,
        // then +1 to the value in the column likes
        // ddd('works');
        // $post = likes::all();
        // dd($post);
        // $res = $post->likes;

        // $like = $post->update([
        //     'likes'=>$res++
        // ]);


    }
}
