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
//        dd($request->all());
        $request->validate([
            'heading_slider'=>'string|required',
            'pragraph_slider'=>'string|required',
            'add_img'=>'image|required',
        ]);
        $slider = new Slider();
        $slider->title = $request->heading_slider;
        $slider->description = $request->pragraph_slider;
        $img = $request->add_img;
        $slider->img =date('m-d-Y-h-i-s').".".$img->extension();
        $img->move('images/slider',$slider->img);
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

    public function update(Request $request,$id){
        $request->validate([
            'img_slider'=>'image|required',
            'heading_slider'=>'string|required',
            'pragraph_slider'=>'string|required'
        ]);

        $slider = Slider::find($id);
        $slider->title = $request->heading_slider;
        $slider->description = $request->pragraph_slider;
        $img = $request->img_slider;
        $slider->img = $slider->id.".".date('m-d-Y-h-i-s').".".$img->extension();
        $img->move('images/slider',$slider->img);
        $slider->save();
        return redirect()->route('slider.show');
    }
}
