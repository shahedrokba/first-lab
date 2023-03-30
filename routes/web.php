<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\TaskController;
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

Route::get('/', [TaskController::class,'index'])->name('task');
Route::post('insert',[TaskController::class,'store'])->name('task.insert');
Route::delete('delete/{id}',[TaskController::class,'destroy'])->name('task.delete');
Route::post('edit/{id}', [TaskController::class,'edit'])->name('task.edit');



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
/*
Route::post('editt/{id}',function($id){
    $n = request('taskName');
    if($n){
    DB::table('tasks')->where('id',$id)->update(['name'=>$n]);

    return redirect('/');}
    else
    return view('edit',compact('id'));

});

*/


Route::get('front',function(){
    return view('project.index');
});
