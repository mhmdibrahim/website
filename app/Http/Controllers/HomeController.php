<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Contact_us;
use App\Portofolio_Project;
use App\Section;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
       $blogs= Blog::with('team')->get();
       $sections =Section::all()->keyBy('section_name');
       $sliders=DB::table('slider')->get();
       $clients=DB::table('clients')->get();
       $all_with_us=DB::table('with_us')->get();
       $skills=DB::table('skills')->get();
       $services=DB::table('service')->get();
       $team_members=DB::table('team')->get();
       $team_members = array_chunk($team_members->toArray(),4);
       $team_socials = Team::with('social_medias')->get();
       $team_socials = $team_socials->chunk(4);
       $portofolio_categories=DB::table('portofolio_categ')->get();
       $portofolio_projects=Portofolio_Project::with('portfolio_categ')->get();
       return view('index')->with('blogs',$blogs)
                                ->with('sections',$sections)
                                ->with('sliders',$sliders)
                                ->with('all_with_us',$all_with_us)
                                ->with('skills',$skills)
                                ->with('services',$services)
                                ->with('team_members',$team_members)
                                ->with('team_socials',$team_socials)
                                ->with('portofolio_categories',$portofolio_categories)
                                ->with('team_projects',$portofolio_projects)
                                ->with('clients',$clients);
    }

    public function contact_us(Request $request){
         $contact_us = new Contact_us() ;
         $contact_us->name = $request->name ;
         $contact_us->email = $request->email ;
         $contact_us->msg = $request->message ;
         $contact_us->arrival_time = now();
         $contact_us->save();
        return redirect()->route('show');
    }
}
