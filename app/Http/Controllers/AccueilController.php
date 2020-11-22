<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    
    public function index(){

        
        return view('pages.home');
    }

    public function about(){

        return view('pages.apropos');
    }

    public function contact(){

        return view('pages.contact');
    }

}
