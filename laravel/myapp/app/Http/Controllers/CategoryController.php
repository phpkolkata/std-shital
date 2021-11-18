<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Category;

class CategoryController extends Controller
{
    function index(){
        // Query Builder Method
        // $data = \DB::table('category')
        // ->select('id', 'name')
        // ->get();

        // Eloquent Way
        // $data = Category::select('id', 'name')
        // ->get();

        $data = Category::all();

        return view('category.index',["data"=>$data]);
    }

    function addForm(){
       return view('category.add');
    }

    function adding(Request $r){
        $data =  $r->except("_token");
        // Query Builder Method
        // \DB::table('category')->insert($data);

        // Eloquet Method
        // Category::insert($data);
         $cat = new Category();
         $cat->name = $r->input('name');
         $cat->is_active = $r->input('is_active');
         $cat->save();
    }
}
