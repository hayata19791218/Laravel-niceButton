<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Nice;
use Illuminate\Support\Facades\Auth;

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

    //いいねを表示するページ
    // public function index(Post $post)
    // {
    //     $posts = Post::all();
    //     $user = Auth::user()->id;
    //     $nice = Nice::where('post_id', $post->id)->where('user_id', $user)->first();
    //     return view('home',compact("posts","nice"));
    // }
}
