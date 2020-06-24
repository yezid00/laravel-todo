<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use App\Todo;
class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    
        $todos = Todo::all();    
        return view('todos.index',compact('todos'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'todo'=>'required'
        ]);
        $todo = new Todo;
        $todo->todo = $request->todo;
        $todo->save();

        //$todos =  Todo::all();

        return Redirect::back();
        //return view('todos.index',compact('todos'));
        //return redirect()->route('todos.index');
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
        return Redirect::back();
    }
}
