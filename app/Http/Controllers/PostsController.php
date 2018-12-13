<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Post;
use Illuminate\Validation\Validator;

class PostsController extends Controller
{

    public function __construct()
    {
        $this->middleware('role:author,admin',
            ['only' => [
                'index', 'create', 'store', 'show', 'edit', 'update', 'delete'
            ]
            ]
        );
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $titleForm = "Create Post";
        return view('posts.create', compact('titleForm'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
           'title'          => 'required|string|min:3',
           'body'           => 'required',
           'featured'       => 'required',
           'category_id'    => 'required',
           'status'         => 'required'
        ]);

        $posts = new \App\Post;

//        if ($request->file('featured')) {
//            $image_path = $request->file('featured')
//                ->store('featured', 'public');
//
//            $posts->featured = $image_path;
//        }

        $file = $request->file('featured');
        $ext = $file->getClientOriginalExtension();
        $newName = rand(100000,1001238912).".".$ext;
        $file->move('uploads/file',$newName);

        $posts->title           = $request->get('title');
        $posts->body            = $request->get('body');
        $posts->category_id     = $request->get('category_id');
        $posts->status          = $request->get('status');
        $posts->slug            = str_slug($request->get('title'), '-');
        $posts->published_at    = Carbon::now();
        $posts->created_at      = Carbon::now();
        $posts->user_id         = \Auth::user()->id;
        $posts->featured        = $newName;

        $posts->save();

        return redirect()->route('admin.posts.create')->with('status','Berhasil menambahkan data post');




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.show', ['id' => $id], compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $titleForm = "Edit Post Data";
        $post = Post::findOrFail($id);

        return view('posts.edit', compact(['titleForm','post']));
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
        $post = Post::findOrFail($id);

        $this->validate($request, [
            'title'          => 'required|string|min:3',
            'body'           => 'required',
            'category_id'    => 'required',
            'status'         => 'required'
        ]);

        if (empty($request->file('featured'))){
            $post->featured = $post->featured;
        }
        else{
            unlink('uploads/file/'.$post->featured); //menghapus file lama
            $file = $request->file('featured');
            $ext = $file->getClientOriginalExtension();
            $newName = rand(100000,1001238912).".".$ext;
            $file->move('uploads/file',$newName);
            $post->featured = $newName;
        }

        $post->title           = $request->get('title');
        $post->body            = $request->get('body');
        $post->category_id     = $request->get('category_id');
        $post->status          = $request->get('status');
        $post->slug            = str_slug($request->get('title'), '-');
//        $post->published_at    = Carbon::now();
//        $post->created_at      = Carbon::now();
        $post->updated_at      = Carbon::now();
        $post->user_id         = \Auth::user()->id;

        $post->save();

        return redirect()->route('admin.posts.edit', ['id' => $id])->with('status','Berhasil mengubah data post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        unlink('uploads/file/'.$post->featured); //menghapus file lama
        $post->delete();

        return redirect()->route('admin.posts.index')->with('status', 'Berhasil menghapus data post');
    }
}
