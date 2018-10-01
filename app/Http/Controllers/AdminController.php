<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function home()
    {
        $teams =Team::all()->count();
        $services = DB::table('service')->count();
        $blogs = Blog::all()->count();
        return view('admin.control')->with('teams',$teams)
                                        ->with('services',$services)
                                        ->with('blogs',$blogs);
    }

}
