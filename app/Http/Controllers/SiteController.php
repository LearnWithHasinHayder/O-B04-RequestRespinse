<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function home(Request $request){
        return view('site.home'); // site/home.blade.php
    }

    function about(){
        return view('site.about'); // site/about.blade.php
    }
}
