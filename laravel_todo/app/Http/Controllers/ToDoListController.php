<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ValidateRequest;

use Illuminate\Support\Facades\DB;

class ToDoListController extends Controller
{
    public function index(Request $request)
    {
        $items = DB::select('select * from comments');
        return view('laravel_views.todolist_home', compact('items'));
    }

    public function store(ValidateRequest $request)
    {
        $param = [
            'comment' => $request->comment,
        ];
        DB::insert('insert into comments (comment) values (:comment)', $param);
        return redirect('/todolist_home');
    }
}
