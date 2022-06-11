<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MidModel;

class NameController extends Controller
{
    function home(){
       
        return view('Home');
    }
}
