<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreTaskRequest;

use Illuminate\Support\Facades\DB;

use App\Models\Tasks;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Tasks::all();
        return view('laravel_views.tasks', compact('items'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaskRequest $request)
    {
        $tasks = new Tasks;
        $form  = $request->all();
        $tasks->fill($form)->save();
        return redirect('/tasks');
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $tasks =  Tasks::find($id);
        $status = $tasks->status;
        $tasks->status = $status === 0 ? 1 : 0;
        $tasks->save();
        return redirect('/tasks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tasks::find($id)->delete();
        return redirect('/tasks');
    }
}
