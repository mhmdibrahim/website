<?php

namespace App\Http\Controllers;

use App\WithUs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function show(){
        $about_us = DB::table('with_us')->get();
        return view('admin.about')->with('about_us',$about_us);
    }
    public function add(Request $request){
//        dd($request->all());
        $request->validate([
            'title'=>'string|required',
            'description'=>'string|required',
            'img'=>'image|required',
            'icon'=>'string|nullable'
        ]);
        $about = new WithUs();
        $about->title = $request->title ;
        $about->description = $request->description;
        $about->icon = 'fa-users' ;
        $img = $request->img ;
        $about->img =date('d-m-Y-h-i-s')."." .$img->extension();
        $img->move('images/about-us',$about->img);
        $about->save();
        return redirect()->route('about.show');
    }

    public function update(Request $request ,$id)
    {
        $request->validate([
            'edit_title'=>'string|required',
            'edit_desc'=>'string|required',
            'edit_img'=>'image|required'
        ]);
        $about = WithUs::find($id);
        $about->title=$request->edit_title;
        $about->description=$request->edit_desc;
        $img = $request->edit_img ;
        $about->img = $about->id. "." .date('m-d-Y-h-i-s'). $img->extension();
        $img->move('images/about-us',$about->img);
        $about->save();
        return redirect()->route('about.show');

    }
    public function delete($id){
        WithUs::destroy($id);
        return redirect()->route('about.show');
    }
}
