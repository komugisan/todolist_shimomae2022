<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TodoController extends Controller
{
        public function index()
    {
        $todos = DB::select('select * from todolist order by id desc');
        $data = ['todos' => $todos];
        return view('index',$data);
    }
    public function post(Request $request)
    {
        $param = [
            'todo' => $request->todo, //取得したいデータをinput要素のname属性
        ];
        DB::insert('insert into todolist set todo = :todo', $param);
        return redirect('/');
    }
    public function delete(Request $request)
    {
        file_put_contents('test.log', print_r($request->input(), true));
        DB::table('todolist')-> where($request->input())->delete();
        return redirect('/');
    }
}