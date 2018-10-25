<?php

namespace App\Http\Controllers;

use App\Social_Media;
use App\Team;
use App\Team_Social;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){
        $teams = Team::all();
        return view('admin.team')->with('teams',$teams);
    }

    public function details($id)
    {
        $team_id = Team::find($id);
        $links = Team_Social::where('team_id',$id)->get();
        $social_medias =Social_Media::all();
        return view('admin.team_details')->with('team',$team_id)
                                    ->with('links',$links)
                                    ->with('social_medias',$social_medias);
    }

    public function add(Request $request)
    {
        $request->validate([
            'name'=>'string|required',
            'position'=>'string|required',
            'desc'=>'string|required',
            'img'=>'image|required'
        ]);
        $team = new Team();
        $team->name = $request->name;
        $team->position = $request->position;
        $team->description=$request->desc;
        $img = $request->img ;
        $team->img = date('d-m-Y-h-i-s'). "." .$img->extension();
        $img->move('images/our-team',$team->img);
        $team->save();
        return redirect()->route('team.show');
    }
    public function delete($id)
    {
        Team::destroy($id);
        return redirect()->route('team.show');
    }
    public function update(Request $request , $id)
    {
        $request->validate([
            'edit_name'=>'string|required',
            'edit_desc'=>'string|required',
            'edit_pos'=>'string|required',
            'edit_img'=>'image|required',
        ]);
        $team = Team::find($id);
        $team->name = $request->edit_name;
        $team->position = $request->edit_pos;
        $team->description = $request->edit_desc;
        $img = $request->edit_img ;
        $team->img = $team->id . "." . date('d-m-Y-h-i-s'). "." .$img->extension();
        $img->move('images/our-team/',$team->img);
        $team->save();
        return redirect()->route('team.show');
    }

    public function addLink(Request $request , $id)
    {
        $request->validate([
            'link'=>'active_url|required',
        ]);
        $team_social = new Team_Social();
        $team_social->team_id = $id ;
        $team_social->social_id = $request->social_id ;
        $team_social->link = $request->link;
        $team_social->save();
        return redirect()->route('team.details',$id);
    }
    public function updateLink(Request $request,$id)
    {
        $request->validate([
            'link'=>'active_url|required',
        ]);
        $team_social = Team_Social::find($id);
        $team_social->team_id = $request->team_id;
        $team_social->link = $request->link;
        $team_social->social_id = $request->social_id ;
        $team_social->save();
        return redirect()->route('team.details',$request->team_id);
    }

    public function deleteLink(Request $request , $id)
    {
        $team_id = $request->team_id ;
        Team_Social::destroy($id);
        return redirect()->route('team.details',$team_id);
    }
}
