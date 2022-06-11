<?php

namespace App\Http\Controllers;

use App\Models\MidModel;
use Illuminate\Http\Request;

class MidController extends Controller
{
    

    function create(){

        return view('Register');

    }

    function createSubmit(Request $req){



        $this->validate($req,

             [

                "name"=>"required|max:20|regex:/^[a-z A-z]+$/",

                "email"=>'required|email',

                "password"=>"required|min:8",

                "type"=>"required"

             ],

             [

                 "name.required"=> "Please provide your name",

                 "name.max"=> "Name should not exceed 20 characters",

                 "password.max"=> "Password should be exceed 8 characters",

             ]

            );



            $s1 = new MidModel();

            $s1->type = $req->type;

            $s1->name = $req->name;

            $s1->password = $req->password;

            $s1->email = $req->email;

            $s1->save();            

            return redirect()->intended('/');

    }
    function login(){

        return view('Login');

    }
    function loginSubmit(){

        return redirect()->intended('/dashboard');

    }

     function List(){
         $mids = MidModel::all();
         return view('List')
              ->with('mids',$mids);
     }


}
