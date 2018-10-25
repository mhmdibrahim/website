<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show(){
        $clients = Client::all();
        return view('admin.Clints')->with('clients',$clients);
    }

    public function add(Request $request)
    {
        $request->validate([
            'name'=>'string|required',
            'description'=>'string|required',
            'link'=>'string|required',
            'img'=>'image|required'
        ]);
        $client = new Client();
        $client->name = $request->name;
        $client->description=$request->desc;
        $client->link = $request->link;
        $img=$request->img;
        $client->img = date('d-m-Y-h-i-s').".".$img->extension();
        $img->move('images/clients',$client->img);
        $client->save();
        return redirect()->route('clients.show');
    }

    public function update(Request $request , $id)
    {
        $request->validate([
            'edit_name'=>'string|required',
            'edit_desc'=>'string|required',
            'edit_link'=>'string|required',
            'edit_img'=>'image|required'
        ]);
        $client = Client::find($id);
        $client->name = $request->edit_name;
        $client->description = $request->edit_desc;
        $client->link = $request->edit_link;
        $img = $request->edit_img;
        $client->img = $client->id. "." . date('d-m-Y-h-i-s'). "." .$img->extension();
        $img->move('images/clients',$client->img);
        $client->save();
        return redirect()->route('clients.show');
    }

    public function delete($id)
    {
        Client::destroy($id);
        return redirect()->route('clients.show');
    }
}
