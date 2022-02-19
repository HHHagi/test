<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ValidateRequest;

use Illuminate\Support\Facades\DB;

class ToDoListController extends Controller
{
    public function main(Request $request)
    {
        $items = DB::select('select * from comments');
        return view('laravel_views.main', ['items' => $items]);
    }

    public function create(Request $request)
    {
        $param = [
            'comment' => $request->comment,
        ];
        DB::insert('insert into comments (comment) values (:comment)', $param);
        return redirect('/main');
    }
}
