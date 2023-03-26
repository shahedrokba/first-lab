<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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
    $tasks = DB::table('tasks')->get();
    return view('index',compact('tasks'));

});


Route::get('about',function(){
    if(isset($_GET['name']))
       $name = $_GET['name'];
       else
       $name="hassan";
  return view('about',compact('name'));

});
Route::get('task',function(){
   $tasks=["task 1","task 2","task 3"];
   return view('tasks',compact('tasks'));
});
Route::post('delete/{id}',function($id){
DB::table('tasks')->where('id',$id)->delete();
return redirect()->back();
});
Route::post('editt/{id}',function($id){
    $n = request('taskName');
    if($n){
    DB::table('tasks')->where('id',$id)->update(['name'=>$n]);

    return redirect('/');}
    else
    return view('edit',compact('id'));

});

Route::get('insert',function(){
    DB::table('tasks')->insert([
        'name'=>$_GET['name'],
        'created_at'=>now(),
        'updated_at'=>now()
    ]);
    return redirect()->back();
    });


Route::get('front',function(){
    return view('project.index');
});
