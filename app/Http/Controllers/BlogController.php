<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Team;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){
        $blogs = Blog::with('team')->get();
        $teams = Team::all();
        return view('admin.Blog')->with('blogs',$blogs)
            ->with('teams',$teams);
    }

    public function add(Request $request)
    {
//        dd($request->all());
        $request->validate([
            'title'=>'string|required',
            'desc'=>'string|required',
            'member'=>'integer|required',
            'img'=>'image|required',
        ]);
        $blog = new Blog();
        $blog->title=$request->title;
        $blog->description=$request->desc;
        $blog->team_id=$request->member;
        $img = $request->img ;
        $blog->img =date('m-d-Y-h-i-s'). "." .$img->extension();
        $img->move('images/blog',$blog->img);
        $blog->save();
        return redirect()->route('blogs.show');
    }

    public function delete(Request $request ,$id)
    {
        Blog::destroy($id);
        return redirect()->route('blogs.show');
    }
    public function update(Request $request,$id)
    {
        $request->validate([
            'edit_title'=>'string|required',
            'edit_desc'=>'string|required',
            'member'=>'integer|required',
            'edit_img'=>'image|required'
        ]);
        $blog = Blog::find($id);
        $blog->title=$request->edit_title;
        $blog->description=$request->edit_desc;
        $blog->team_id=$request->member;
        $img=$request->edit_img;
        $blog->img=$blog->id. "." .date('d-m-Y-h-i-s'). $img->extension();
        $img->move('images/blog',$blog->img);
        $blog->save();
        return redirect()->route('blogs.show');

    }
}
