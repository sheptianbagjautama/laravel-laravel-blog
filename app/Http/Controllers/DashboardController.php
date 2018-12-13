<?php

namespace App\Http\Controllers;

use App\Category;
use App\Comment;
use App\Post;
use App\Setting;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

//    public function setting()
//    {
//        return Setting::first();
//    }
//
//    public function index()
//    {
//        $setting = $this->setting();
//        $posts = Post::where('status',1)->orderBy('published_at','DECS')->paginate('6');
//        return view('welcome',compact('setting','posts'));
//    }
}
