<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;

class formController extends Controller
{
    public function register(){
        return view('form');
    }
    public function data(Request $request){
       print_r($request->all());
       $request->validate([
        'name'=>'required',
        'email'=>'required | email',
        'password'=>'required'
       ]);
       $info=new form();
       $info->name=$request['name'];
       $info->email=$request['email'];
       $info->pass=$request['password'];
       $info->save();
       return redirect('std/view');

    }
    public function std_view(){
        $stdData=Form::all();
        $data=compact('stdData');
        return view('std-view')->with($data);
    }
    public function std_dlt($id){
       $find=Form::find($id)->delete();
       return redirect('std/view');
    }
}
