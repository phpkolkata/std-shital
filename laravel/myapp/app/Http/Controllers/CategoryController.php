<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;

class CategoryController extends Controller
{
    function index(Request $r){
        // $r->session()->put('name', "raj");
        // Query Builder Method
        // $data = \DB::table('category')
        // ->select('id', 'name')
        // ->get();

        // Eloquent Way
        // $data = Category::select('id', 'name')
        // ->get();

        // $data = Category::paginate(8);
        // $data = Category::find(1)->products;
        $data = Product::find(1)->category;
        return ["result"=>$data];
        return view('category.index',["data"=>$data]);
    }

    function addForm(Request $r){
        // return $r->session()->get('name');
       return view('category.add');
    //    mail()
    }

    function adding(Request $r){
        $data =  $r->except("_token");

        $im = $r->file('im')->store('/public');;
            // return $im->getClientOriginalExtension();
        $im = $r->input('im');
        $path = $r->im->storeAs('images', $im);

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
