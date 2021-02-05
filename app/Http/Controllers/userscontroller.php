<?php

namespace App\Http\Controllers;

use App\Models\users;
use Illuminate\Http\Request;

class userscontroller extends Controller
{
    public function  index(){
        $users=users::all();
        return view('users.index',compact('users'));

    }
    public function  create(){
        return view('users.create');
    }
    public function  store(Request $request){
        users::create($request->all());
        return redirect()->route('users.index');

    }
}
