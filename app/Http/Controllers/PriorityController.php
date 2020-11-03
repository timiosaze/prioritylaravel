<?php

namespace App\Http\Controllers;

use App\Priority;
use Illuminate\Http\Request;

class PriorityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $priorities = Priority::orderBy('updated_at', 'desc')->get();

        return view('priority.index', compact("priorities"));
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
        //
        request()->validate([
            'body' => 'required',
            'priority_level' => 'required'
        ]);

        $priority = new Priority();
        $priority->body = request('body');
        $priority->priority_level = request('priority_level');

        if($priority->save()){
            return redirect('/priority');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Priority  $priority
     * @return \Illuminate\Http\Response
     */
    public function show(Priority $priority)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $priority = Priority::findOrFail($id);

        return view('priority.edit', compact("priority"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        request()->validate([
            'body' => 'required',
            'priority_level' => 'required'
        ]);

        $priority = Priority::findOrFail($id);
        $priority->body = request('body');
        $priority->priority_level = request('priority_level');

        if($priority->save()){
            return redirect('/priority');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $priority = Priority::findOrFail($id);

        if($priority->delete()){
            return redirect('/priority');
        }
    }
}
