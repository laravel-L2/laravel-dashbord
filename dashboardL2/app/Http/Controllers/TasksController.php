<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Tasks::all();
        $number = 0;
        return view("tasks.index", compact('tasks', 'number'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("tasks.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new Tasks;
        $task->titre = $request->titre;
        $task->department = $request->department;
        $task->add_tache_date = $request->add_tache_date;
        $task->description = $request->description;
        $task->save();
        $tasks = Tasks::all();
        $number = 0;
        return view("tasks.index", compact('tasks', 'number'));
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
        if (Tasks::where('id', $id)->exists()) {
            $task = Tasks::find($id);
            $task->titre = is_null($request->titre) ? $task->titre : $request->titre;
            $task->department = is_null($request->department) ? $task->department : $request->department;
            $task->add_tache_date = is_null($request->add_tache_date) ? $task->add_tache_date : $request->add_tache_date;
            $task->description = is_null($request->description) ? $task->description : $request->description;
            $task->save();
            return response()->json([
                "message" => "Tâche modifie."
            ], 200);
        }else{
            return response()->json([
                "message" => "Tâche Not Found."
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(Tasks::where('id', $id)->exists()) {
            $task = Tasks::find($id);
            $task->delete();

            return response()->json([
              "message" => "Tâche supprime"
            ], 200);
        } else {
            return response()->json([
              "message" => "Tâche not found"
            ], 404);
        }
    }
}
