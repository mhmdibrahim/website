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
        $request->validate([
            'title'=>'string',
            'description'=>'string',
            'img'=>'string',
            'icon'=>'string|nullable'
        ]);
        $about = new WithUs();
        $about->title = $request->title ;
        $about->description = $request->description;
        $about->img = $request->img ;
        $about->icon = 'fa-users' ;
        $about->save();
        return redirect()->route('about.show');
    }
    public function delete($id){
        WithUs::destroy($id);
        return redirect()->route('about.show');
    }
}
