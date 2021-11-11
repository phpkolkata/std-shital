<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;

class PageController extends Controller
{

    function page1(){
        return view('pages.page1');
        // return "test";
    }

    function page2(){
        return view('pages.page2');
    }
}
