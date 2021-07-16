<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Restaurant;

class RestoController extends Controller
{
    //
    function index(){
        return view("home");
    }

    function list(){
        $data = Restaurant::all();
        return view('list',["data"=>$data]);
    }

    function add(Request $req){
        //return $req->input();
        $resto = new Restaurant;
        $resto->name=$req->input('name');
        $resto->email=$req->input('email');
        $resto->adress=$req->input('adress');
        $resto->save();
        $req->session()->flash('status','Restaurant added successfully');
        return redirect('list');
    }

    function delete($id, Request $req){
        Restaurant::find($id)->delete();
        //Session::flash('status', 'Restaurand has been deleted successfully');
        $req->session()->flash('status', 'Restaurand has been deleted successfully');
        return redirect('list');
    }

    function edit($id, Request $req){
        $data = Restaurant::find($id);
        $req->session()->flash('status', 'Restaurand has been edited successfully');
        $resto = new Restaurant;
        $resto->name=$req->input('name');
        $resto->email=$req->input('email');
        $resto->adress=$req->input('adress');
        $resto->update();
        return view('edit', ["data"=>$data]);
    }
}
