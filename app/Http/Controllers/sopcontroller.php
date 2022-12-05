<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sopmodel;
class sopcontroller extends Controller
{
    //
    function index(){
        $data=sopmodel::all();
        return view('/sop',['sops'=>$data]);
    }

    function addsop(Request $req){
        $contact=sopmodel::create($req->all());
        return redirect("/home");
    }

    function deletesop($id){
        $post=sopmodel::find($id);
        $post->delete();
        return redirect("/home");
    }
}
