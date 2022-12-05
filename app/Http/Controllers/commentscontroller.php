<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\commentsmodel;
class commentscontroller extends Controller
{
    //
    function index(){
        $data=commentsmodel::all();
        return view('/comment',['comments'=>$data]);
    }

    function addcomment(Request $req){
        $comment = commentsmodel::create($req->all());
        return redirect("/home");

    }

    function deletecomment($id){
        $post=commentsmodel::find($id);
        $post->delete();
        return redirect("/home");
    }
}
