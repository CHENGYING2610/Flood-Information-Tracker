<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\postsmodel;
use App\Models\commentsmodel;
use Illuminate\Support\Facades\DB;

class postscontroller extends Controller
{
    //
    function index(){
        $data=postsmodel::all();
        $selection="all";
        return view('/forum',['posts'=>$data,'selection'=>$selection]);
    }

    function general(){
        $data=DB::table('posts')
                    ->where('cat','general')
                    ->select('posts.*')
                    ->get();
        $selection="general";
        return view('/forum',['posts'=>$data,'selection'=>$selection]);
    }
    function donation(){
        $data=DB::table('posts')
                    ->where('cat','donation')
                    ->select('posts.*')
                    ->get();
        $selection="donation";
        return view('/forum',['posts'=>$data,'selection'=>$selection]);
    }
    function recuitment(){
        $data=DB::table('posts')
                    ->where('cat','recuitment')
                    ->select('posts.*')
                    ->get();
        $selection="recuitment";
        return view('/forum',['posts'=>$data,'selection'=>$selection]);
    }
    function lostfound(){
        $data=DB::table('posts')
        ->where('cat','lostfound')
        ->select('posts.*')
        ->get();
        $selection="lostfound";
        return view('/forum',['posts'=>$data,'selection'=>$selection]);
    }
    function urgent(){
        $data=DB::table('posts')
                    ->where('cat','urgent')
                    ->select('posts.*')
                    ->get();
        $selection="urgent";
        return view('/forum',['posts'=>$data,'selection'=>$selection]);
    }

    function getpost($id){
        $data=postsmodel::find($id);
        $data2=DB::table('comments')
                    ->join('users','comments.user_id','=','users.id')
                    ->where('comments.post_id',$id)
                    ->select('comments.*','users.name')
                    ->get();
        //echo $data2;
        return view('post',['post'=>$data,'comments'=>$data2]);
    }

    function getpostforcomment($id){
        $data=postsmodel::find($id);
        return view('responsepage',['post'=>$data]);
    }

    function addpost(Request $req){
        $post=new postsmodel;
        $post->title=$req->title;
        $post->content=$req->content;
        $post->user_id=$req->user_id;
        $post->cat=$req->cat;
        if($req->file('image')){
            $file= $req->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('/Images/'), $filename);
            $post->image_path= $filename;
        }
        $post->save();
        return redirect("/home");
    }

    function editpost($id){
        $data=postsmodel::find($id);
        return view('updatepost',['post'=>$data]);
    }

    function updatepost(Request $req){
        $post=postsmodel::find($req->post_id);
        $post->title=$req->title;
        $post->content=$req->content;
        $post->user_id=$req->user_id;
        $post->cat=$req->cat;
        if($req->file('image')){
            $file= $req->file('image');
            $filename= date('YmdHi').$file->getClientOriginalName();
            $file-> move(public_path('/Images/'), $filename);
            $post->image_path= $filename;
        }
        $post->save();
        return redirect("/home");
    }

    function deletepost($id){
        $post=postsmodel::find($id);
        $post->delete();
        return redirect("/home");
    }
}
