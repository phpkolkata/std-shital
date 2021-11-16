<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;;

class PageController extends Controller
{
    function page1(){
        return view('pages.page1');
        // return "test";
    }

    function page2($id){
        return $id;
        return view('pages.page2');
    }

    function page3(){
        return view('pages.page3');
    }

    function page4(Request $r){
        // return $r->input('nm');
        // return $r->all();

        // validation
        $validated = $r->validate([
            'nm' => 'required|min:3',
            'age' => 'required|numeric',
        ]);

        $data = $r->except("_token");
        return view('pages.page4',["data"=>$data]);
    }


}
