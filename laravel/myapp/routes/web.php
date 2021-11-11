<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // logic building
    $name = "Raj";
    return view('welcome',["nm"=>$name]);
});

Route::get('home',function(){
    $data = ["title"=>"home", "age"=>22];
    return view("home", ["data"=>$data]);
});

// Route::get('/tpl', function(){
//     return view('master.layout');
// });

Route::get('/page1',[PageController::class,'page1']);
Route::get('/page2',[PageController::class, 'page2'] );

