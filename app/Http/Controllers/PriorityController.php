<?php

namespace App\Http\Controllers;

use App\Priority;
use Auth;
use Illuminate\Http\Request;

class PriorityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $priorities = Priority::where('user_id', Auth::id())->orderBy('updated_at', 'desc')->paginate(7);

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
        $priority->user_id = Auth::id();

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
        $priority = Priority::where('user_id', Auth::id())->findOrFail($id);

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

        $priority = Priority::where('user_id', Auth::id())->findOrFail($id);
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
        $priority = Priority::where('user_id', Auth::id())->findOrFail($id);

        if($priority->delete()){
            return redirect('/priority');
        }
    }
}
