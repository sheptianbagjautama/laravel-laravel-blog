<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Post;
use App\Setting;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function setting()
    {
        return Setting::first();
    }

    public function index()
    {
        $setting = $this->setting();
        $posts = Post::where('status', 1)->orderBy('published_at', 'DESC')->limit(3)->get();
        return view('welcome', compact('setting', 'posts'));
    }

    public function allposts()
    {
        $posts = Post::where('status',1)->orderBy('published_at','DESC')->get();
        return view('allposts',compact('posts'));
    }

    public function show($slug)
    {
        $setting = $this->setting();
        $post = Post::where('slug',$slug)->first();
        $allPosts = Post::where('status', 1)->limit(3)->get();

        return view('showpost',compact('setting','post','allPosts','comments'));
    }

    public function postCategory($slug)
    {
        $setting = $this->setting();
        $category = Category::where('slug', $slug)->first();
        $posts = $category->posts()->where('status', 1)->orderBy('published_at', 'DESC')->paginate(4);
        return view('postCategory', compact('setting', 'posts'));
    }


    public function comment(Request $request, $slug)
    {
//        $this->validate($request, [
//            'name' => 'required|min:3',
//            'email' => 'required|email',
//            'body' => 'required|min:5'
//        ]);
        $setting = $this->setting();
        $post = Post::where('slug', $slug)->first();

        $request['post_id'] = $post->id;
        $request['status'] = 0;
        Comment::create($request->all());

        // return redirect('/blog/' . $slug);
        return redirect()->route('allposts');

    }


}
