<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    //about page
    public function about(){
        return view('pages.about');
    }
     //contact page
     public function contact(){
        return view('pages.contact');
    }

    public function destinations (){
        return view('pages.destinations');
    }

    public function map (){
        return view('pages.map');
    }

    
}
