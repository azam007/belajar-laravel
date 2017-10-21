<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use Illuminate\Routing\Route;
class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = '';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $title = 'Add Todo';
        $plan_id = $id;
        return view('todo.create', compact('title', 'plan_id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Todo::create([
            'do' => $request->todo,
            'status' => '',
            'plan_id' => $request->plan
        ]);

        return redirect('\/plan\/'.$request->plan.'/todo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    public function move($id, $param)
    {
        $todo = Todo::find($id);
        $do = str_slug($param, ' ');
        $compare = strcasecmp($todo->do, $do);
        if($compare != 0){
            abort('404');
        }

        $todo->status = 'progress';
        $todo->save();
        return redirect("/plan/{$id}/todo");
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
