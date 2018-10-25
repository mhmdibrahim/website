<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){
        $services = Service::all();
        return view('admin.Services')->with('services',$services);
    }

    public function add(Request $request)
    {
        $request->validate([
            'title'=>'string|required',
            'desc'=>'string|required',
        ]);
        $service = new Service();
        $service->title = $request->title ;
        $service->description = $request->desc ;
        $service->icon = 'fa-users';
        $service->save();
        return redirect()->route('services.show');
    }

    public function update(Request $request , $id)
    {
        $request->validate([
            'edit_title'=>'string|required',
            'edit_desc'=>'string|required',
        ]);
        $service = Service::find($id);
        $service->title = $request->edit_title;
        $service->description = $request->edit_desc;
        $service->icon = 'fa-users';
        $service->save();
        return redirect()->route('services.show');
    }

    public function delete($id)
    {
        Service::destroy($id);
        return redirect()->route('services.show');
    }

}
