<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        $r = route('task.insert');
        $tasks = DB::table('tasks')->get();
        $nn = "New Task";
        $bb = "Add Task";
        return view('index',compact('tasks','nn','bb','r'));
    }
    public function store(){

        DB::table('tasks')->insert([
            'name'=>$_POST['name'],
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        return redirect()->back();
    }
    public function destroy($id){
        DB::table('tasks')->where('id',$id)->delete();
        return redirect()->back();
    }
    public function edit($id){
        $r = route('task.edit',$id);
        $tasks = DB::table('tasks')->get();
        $nn = "Update Task";
        $bb = "Update";
        $name = request('name');
         if($name){
            DB::table('tasks')->where('id',$id)->update(['name'=>$name]);
            return redirect('/');
        }
        else{
        return view('index',compact('tasks','nn','bb','r'));}

    }

}
