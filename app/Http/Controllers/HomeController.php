<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactmodel;
use App\Models\sheltermodel;
use App\Models\sopmodel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data1=contactmodel::all();
        $data2=sheltermodel::all();
        $data3=sopmodel::all();
        return view('welcome',['contacts'=>$data1,'shelters'=>$data2,'sops'=>$data3]);
        
    }
}
