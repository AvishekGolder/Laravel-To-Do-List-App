<?php

namespace App\Http\Controllers;

use App\Models\simple_todo;
use Illuminate\Http\Request;

class SimpleTodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
            return view('view_list')->with('todo_arr',simple_todo::all());
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create_new_list');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $todo  = new simple_todo();
        $todo->name = $request->input('name');
        $todo->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\simple_todo  $simple_todo
     * @return \Illuminate\Http\Response
     */
    public function show(simple_todo $simple_todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\simple_todo  $simple_todo
     * @return \Illuminate\Http\Response
     */
    public function edit(simple_todo $simple_todo, $id)
    {
        $todo = simple_todo::find($id);
        return view('edit_list')->with('todo_arr', $todo);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\simple_todo  $simple_todo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, simple_todo $simple_todo, $id)
    {
        $todo  = simple_todo::find($id);
        $todo->name = $request->input('name');
        $todo->save();
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\simple_todo  $simple_todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(simple_todo $simple_todo, $id)
    {
        $row = simple_todo::destroy($id);
      
        return redirect('/');
    }
}
