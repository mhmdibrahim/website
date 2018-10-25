<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SkillController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function add(Request $request)
    {
        $request->validate([
            'name'=>'string|required',
            'rate'=>'integer|required',
        ]);
        DB::table('skills')->insert([
            'name'=>$request->name,
            'skill_value'=>$request->rate,
        ]);
        return redirect()->route('about.show');
    }

    public function update(Request $request , $id)
    {
        $request->validate([
            'edit_name'=>'string|required',
            'edit_rate'=>'integer|min:0|max:100|required',
        ]);
        $skill = DB::table('skills')->where('id',$id)
            ->update([
                'name'=>$request->edit_name,
                'skill_value'=>$request->edit_rate,
            ]);
        return redirect()->route('about.show');
    }

    public function delete($id)
    {
        DB::table('skills')->where('id',$id)->delete();
        return redirect()->route('about.show');
    }
}
