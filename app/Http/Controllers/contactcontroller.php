<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactmodel;
use Illuminate\Support\Facades\DB;
class contactcontroller extends Controller
{
    //
    function index(){
        $data=contactmodel::all();
        $selection="all";
        return view('/allcontact',['contacts'=>$data,'selection'=>$selection]);
    }

    function addcontact(Request $req){
        $contact=contactmodel::create($req->all());
        return redirect("/home");
    }

    function deletecontact($id){
        $post=contactmodel::find($id);
        $post->delete();
        return redirect("/home");
    }

    function Johor(){
        $data=DB::table('contactlist')
                    ->where('state','Johor')
                    ->select('contactlist.*')
                    ->get();
        $selection="Johor";
        return view('/allcontact',['contacts'=>$data,'selection'=>$selection]);
    }
    function Kedah(){
        $data=DB::table('contactlist')
                    ->where('state','Kedah')
                    ->select('contactlist.*')
                    ->get();
        $selection="Kedah";
        return view('/allcontact',['contacts'=>$data,'selection'=>$selection]);
    }
    function Kelantan(){
        $data=DB::table('contactlist')
                    ->where('state','Kelantan')
                    ->select('contactlist.*')
                    ->get();
        $selection="Kelantan";
        return view('/allcontact',['contacts'=>$data,'selection'=>$selection]);
    }
    function Malacca(){
        $data=DB::table('contactlist')
                    ->where('state','Malacca')
                    ->select('contactlist.*')
                    ->get();
        $selection="Malacca";
        return view('/allcontact',['contacts'=>$data,'selection'=>$selection]);
    }
    function NegeriSembilan(){
        $data=DB::table('contactlist')
                    ->where('state','Negeri Sembilan')
                    ->select('contactlist.*')
                    ->get();
        $selection="NegeriSembilan";
        return view('/allcontact',['contacts'=>$data,'selection'=>$selection]);
    }
    function Pahang(){
        $data=DB::table('contactlist')
                    ->where('state','Pahang')
                    ->select('contactlist.*')
                    ->get();
        $selection="Pahang";
        return view('/allcontact',['contacts'=>$data,'selection'=>$selection]);
    }
    function Penang(){
        $data=DB::table('contactlist')
                    ->where('state','Penang')
                    ->select('contactlist.*')
                    ->get();
        $selection="Penang";
        return view('/allcontact',['contacts'=>$data,'selection'=>$selection]);
    }
    function Perak(){
        $data=DB::table('contactlist')
                    ->where('state','Perak')
                    ->select('contactlist.*')
                    ->get();
        $selection="Perak";
        return view('/allcontact',['contacts'=>$data,'selection'=>$selection]);
    }
    function Perlis(){
        $data=DB::table('contactlist')
                    ->where('state','Perlis')
                    ->select('contactlist.*')
                    ->get();
        $selection="Perlis";
        return view('/allcontact',['contacts'=>$data,'selection'=>$selection]);
    }
    function Sabah(){
        $data=DB::table('contactlist')
                    ->where('state','Sabah')
                    ->select('contactlist.*')
                    ->get();
        $selection="Sabah";
        return view('/allcontact',['contacts'=>$data,'selection'=>$selection]);
    }
    function Sarawak(){
        $data=DB::table('contactlist')
                    ->where('state','Sarawak')
                    ->select('contactlist.*')
                    ->get();
        $selection="Sarawak";
        return view('/allcontact',['contacts'=>$data,'selection'=>$selection]);
    }
    function Selangor(){
        $data=DB::table('contactlist')
                    ->where('state','Selangor')
                    ->select('contactlist.*')
                    ->get();
        $selection="Selangor";
        return view('/allcontact',['contacts'=>$data,'selection'=>$selection]);
    }
    function Terengganu(){
        $data=DB::table('contactlist')
                    ->where('state','Terengganu')
                    ->select('contactlist.*')
                    ->get();
        $selection="Terengganu";
        return view('/allcontact',['contacts'=>$data,'selection'=>$selection]);
    }
}
