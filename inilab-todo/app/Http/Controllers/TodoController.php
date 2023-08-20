<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TodoController extends Controller
{
   
     //Add Todo
 
     public function TodoCreate(Request $req)
     {
         //validation
         $validate = Validator::make($req->all(), [
             'title' => 'required',
         ]);
         if ($validate->fails()) {
             return back()->withErrors($validate->errors())->withInput();
         }
 
         $td = new Todo();
         $td->title = $req->title;
   
         if($td->save()){
            return redirect()->route('home');
        }
     }
 
     //Todo edit page
 
     public function Todoedit($id)
     {
         $selected = Todo::where('id',$id)->first();
         return view('edit', compact('selected'));
     }
 
 
    //Update
    public function TodoUpdate(Request $req)
    {
        //validation
        $validate = Validator::make($req->all(), [
            'title' => 'required',
        ]);
        if ($validate->fails()) {
            return back()->withErrors($validate->errors())->withInput();
        }

        $td = Todo::where('id',$req->cid)->first();
        $td->title = $req->title;
        $td->status = $req->status == 1? 1 :0;
        $td->update();
        if($td->update()){
            return redirect()->route('home');
        }
    }

 
     // Delete Todo 
     public function todoDelete($id)
     {
         $td = Todo::find($id);
        if($td->delete()){
            return redirect()->route('home');
        }
     }
}
