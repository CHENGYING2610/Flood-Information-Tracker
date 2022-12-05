<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\announcementmodel;
class announcementcontroller extends Controller
{
    //
    
    function index(){
        $data=announcementmodel::all();
        return view('/announcement',['announcements'=>$data]);
    }
}                                                                                                              
