<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SliderController extends Controller
{
    public function show(){
        $sliders = DB::table('slider')->get();
        return view('admin.slider')->with('sliders',$sliders);
    }

    public function add(Request $request){
        $request->validate([
            'title'=>'string',
            'description'=>'string',
            'img'=>'string',
        ]);
        $slider = new Slider();
        $slider->title = $request->heading_slider ;
        $slider->description = $request->pragraph_slider;
        $slider->img = $request->img_slider ;
        $slider->save();
        return redirect()->route('slider.show');
    }

    public function delete($id){
        Slider::destroy($id);
        return redirect()->route('slider.show');
    }

    public function edit($id){
        $slider = Slider::where('id',$id);
        dd($slider);
        return view('admin.slider')->with('slider',$slider);
    }

    public function update(Request $request){
        dd($request->all());
    }
}
