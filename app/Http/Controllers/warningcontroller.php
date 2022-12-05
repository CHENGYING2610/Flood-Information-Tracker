<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\warningmodel;
class warningcontroller extends Controller
{
    //
    
    function index(){
        $data=warningmodel::all();
        return view('/warning',['warnings'=>$data]);
    }
}
