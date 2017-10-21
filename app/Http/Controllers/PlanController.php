<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Plan;
use App\Todo;

class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'Manage Plan';
        $plans = DB::table('todos')
                ->rightjoin('plans', 'todos.plan_id', '=', 'plans.id')
                ->select(array('plans.*', DB::raw('COUNT(todos.id) as total_todos')))
                ->groupBy('plans.id')
                ->get();
        // dd($plans);
        return view('plan.manage', compact('title','plans'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = 'Create Plan';
        return view('plan.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Plan::create([
            'title' => $request->title,
            'desc' => $request->desc,
            'status' => $request->status,
            'start' => $request->start,
            'end' => $request->end
        ]);
        $id = Plan::max('id');
        if($request->status == 0){
            return redirect('/plan/');     
        }
        return redirect('/plan/'.$id.'/todo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $title = 'Manage Plan';
        $plan_id = $id;
        $todos = Todo::where('plan_id',$id)->get()->toArray();
        $plan = Plan::findOrFail($id);
    
        return view('todo.manage', compact('plan_id','title','todos','plan'));
        //
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
        return 'adasd;e';
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
        return 'adasd;u';
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
        return 'adasdd;';
    }
}
