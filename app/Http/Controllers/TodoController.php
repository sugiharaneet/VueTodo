<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use Log;

class TodoController extends Controller
{
    public function index(Request $request)
    {
        $data = Todo::where('user_id', $request->user()->id)->get();

        return $data;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->user()->tasks()->create($request->all());

        return response('', 200);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->text = $request->text;
        $todo->save();

        return response('', 200);
    }

    public function destroy($id)
    {
        Todo::find($id)->delete();
        return response('', 200);
    }
}
