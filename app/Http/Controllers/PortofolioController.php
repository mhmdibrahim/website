<?php

namespace App\Http\Controllers;

use App\Portofolio_Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class PortofolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){
        $porto_projects = Portofolio_Project::with('portfolio_categ')->get();
//        dd($porto_projects);
        return view('admin.Portfolio')->with('porto_projects',$porto_projects);
    }

    public function delete($id){
        Portofolio_Project::destroy($id);
        return redirect()->route('portofolio.show');
    }

    public function add(Request $request){
//        dd($request->all());
        Validator::make($request->toArray(),[
            'title'=>'string',
            'description'=>'string',
            'img'=>'string',
        ]);
        $proto = new Portofolio_Project();
        $proto->title = $request->title ;
        $proto->description = $request->desc;
        $proto->categ_id = $request->categ_id;
        $img = $request->img;
        $proto->image = date('m-d-Y-h-i-s')."." .$img->extension();
        $img->move('images/portfolio',$proto->image);
        $proto->save();
        return redirect()->route('portofolio.show');
    }

    public function update(Request $request , $id){
//        dd($request->all());
       Validator::make($request->toArray(),[
            'title'=>'string|required',
            'image'=>'string|required',
            'description'=>'string|required',
            'categ_id'=>'integer|exists:portofolio_categ,id'
        ]);

        $porto = Portofolio_Project::find($id);
        $porto->title = $request->edit_title ;
        $porto->description = $request->edit_desc;
        $porto->categ_id = $request->categ_id ;
        $porto->save();
        $img = $request->edit_img ;
        $porto->image = $porto->id . ".". date('m-d-Y-h-i-s'). "." . $img->extension();
        $img->move('images/portfolio',$porto->image);
        $porto->save();
        return redirect()->route('portofolio.show');
    }
}
