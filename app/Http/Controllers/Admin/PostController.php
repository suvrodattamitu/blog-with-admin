<?php

namespace App\Http\Controllers\Admin;

use App\Model\user\post;
use App\Model\user\tag;
use App\Model\user\category;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PostController extends Controller
{

    public function index()
    {
        $posts = post::all();
        return view('admin/post/show',compact('posts'));
    }


    public function create()
    {
        $tags = tag::all();
        $categories = category::all();

        return view('admin/post/post',compact('tags','categories'));
    }


    public function store(Request $request)
    {
       $this->validate($request,[

            'title' => 'required',
            'subtitle' => 'required',
            'slug' => 'required',
            'body' => 'required',


        ]);

       $post = new post();

       $post->title = $request->title;
       $post->subtitle = $request->subtitle;
       $post->slug = $request->slug;
       $post->body = $request->body;
       $post->status = $request->status;


       $post->save();

       $post->tags()->sync($request->tags);
       $post->categories()->sync($request->categories);

       return redirect( route('post.index'));

    }

    public function show($id)
    {
       
    }


    public function edit($id)
    {
      $post = Post::with('tags','categories')->where('id',$id)->first(); 
      $tags = tag::all();
      $categories = category::all();

      return view('admin/post/edit',compact('tags','categories','post'));

      
      
    }


    public function update(Request $request, $id)
    {

     

       $this->validate($request,[

            'title' => 'required',
            'subtitle' => 'required',
            'slug' => 'required',
            'body' => 'required',


        ]);

       $post =post::find($id);

       $post->title = $request->title;
       $post->subtitle = $request->subtitle;
       $post->slug = $request->slug;
       $post->body = $request->body;
       $post->status = $request->status;
       
       $post->tags()->sync($request->tags);
       $post->categories()->sync($request->categories);

       $post->save();

       return redirect( route('post.index'));
    }


    public function destroy($id)
    {
      Post::where('id',$id)->delete();
      return redirect()->back();  
    }
}
