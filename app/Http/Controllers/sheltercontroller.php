<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sheltermodel;
use Illuminate\Support\Facades\DB;
class sheltercontroller extends Controller
{
    //
    function index(){
        $data=sheltermodel::all();
        $selection="all";
        return view('/allshelter',['shelters'=>$data,'selection'=>$selection]);
    }

    function addshelter(Request $req){
        $contact=sheltermodel::create($req->all());
        return redirect("/home");
    }

    function deleteshelter($id){
        $post=sheltermodel::find($id);
        $post->delete();
        return redirect("/home");
    }

    function Johor(){
        $data=DB::table('shelterlist')
                    ->where('state','Johor')
                    ->select('shelterlist.*')
                    ->get();
        $selection="Johor";
        return view('/allshelter',['shelters'=>$data,'selection'=>$selection]);
    }
    function Kedah(){
        $data=DB::table('shelterlist')
                    ->where('state','Kedah')
                    ->select('shelterlist.*')
                    ->get();
        $selection="Kedah";
        return view('/allshelter',['shelters'=>$data,'selection'=>$selection]);
    }
    function Kelantan(){
        $data=DB::table('shelterlist')
                    ->where('state','Kelantan')
                    ->select('shelterlist.*')
                    ->get();
        $selection="Kelantan";
        return view('/allshelter',['shelters'=>$data,'selection'=>$selection]);
    }
    function Malacca(){
        $data=DB::table('shelterlist')
                    ->where('state','Malacca')
                    ->select('shelterlist.*')
                    ->get();
        $selection="Malacca";
        return view('/allshelter',['shelters'=>$data,'selection'=>$selection]);
    }
    function NegeriSembilan(){
        $data=DB::table('shelterlist')
                    ->where('state','Negeri Sembilan')
                    ->select('shelterlist.*')
                    ->get();
        $selection="NegeriSembilan";
        return view('/allshelter',['shelters'=>$data,'selection'=>$selection]);
    }
    function Pahang(){
        $data=DB::table('shelterlist')
                    ->where('state','Pahang')
                    ->select('shelterlist.*')
                    ->get();
        $selection="Pahang";
        return view('/allshelter',['shelters'=>$data,'selection'=>$selection]);
    }
    function Penang(){
        $data=DB::table('shelterlist')
                    ->where('state','Penang')
                    ->select('shelterlist.*')
                    ->get();
        $selection="Penang";
        return view('/allshelter',['shelters'=>$data,'selection'=>$selection]);
    }
    function Perak(){
        $data=DB::table('shelterlist')
                    ->where('state','Perak')
                    ->select('shelterlist.*')
                    ->get();
        $selection="Perak";
        return view('/allshelter',['shelters'=>$data,'selection'=>$selection]);
    }
    function Perlis(){
        $data=DB::table('shelterlist')
                    ->where('state','Perlis')
                    ->select('shelterlist.*')
                    ->get();
        $selection="Perlis";
        return view('/allshelter',['shelters'=>$data,'selection'=>$selection]);
    }
    function Sabah(){
        $data=DB::table('shelterlist')
                    ->where('state','Sabah')
                    ->select('shelterlist.*')
                    ->get();
        $selection="Sabah";
        return view('/allshelter',['shelters'=>$data,'selection'=>$selection]);
    }
    function Sarawak(){
        $data=DB::table('shelterlist')
                    ->where('state','Sarawak')
                    ->select('shelterlist.*')
                    ->get();
        $selection="Sarawak";
        return view('/allshelter',['shelters'=>$data,'selection'=>$selection]);
    }
    function Selangor(){
        $data=DB::table('shelterlist')
                    ->where('state','Selangor')
                    ->select('shelterlist.*')
                    ->get();
        $selection="Selangor";
        return view('/allshelter',['shelters'=>$data,'selection'=>$selection]);
    }
    function Terengganu(){
        $data=DB::table('shelterlist')
                    ->where('state','Terengganu')
                    ->select('shelterlist.*')
                    ->get();
        $selection="Terengganu";
        return view('/allshelter',['shelters'=>$data,'selection'=>$selection]);
    }
}
