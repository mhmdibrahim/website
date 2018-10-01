<?php

namespace App\Http\Controllers;

use App\Portofolio_Project;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
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
        $request->validate([
            'title'=>'string',
            'description'=>'string',
            'img'=>'string',
        ]);
        $proto = new Portofolio_Project();
        $proto->title = $request->title ;
        $proto->description = $request->desc;
        $proto->image = $request->img ;
        $proto->categ_id = $request->categ_id;
        $proto->save();
        return redirect()->route('portofolio.show');
    }

    public function update(Request $request , $id){
//        dd($request->all());
//        $request->validate([
//            'title'=>'string|required',
//            'image'=>'string|required',
//            'description'=>'string|required',
//            'categ_id'=>'integer|exists:portofolio_categ,id'
//        ]);
        $porto = Portofolio_Project::find($id);
        $porto->title = $request->edit_title ;
        $porto->image = $request->edit_img;
        $porto->description = $request->edit_desc;
        $porto->categ_id = $request->categ_id ;
        $porto->save();
        return redirect()->route('portofolio.show');
    }
}
