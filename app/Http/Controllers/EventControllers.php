<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventControllers extends Controller
{
    public function create()
    {
        return view('admin.add.news');
    }

    public function store(Request $request)
    {
        Event::insert([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        return redirect(route('admin.news'));
    }


    public function edit($id)
    {
        $app = Event::where('id', $id)->first();

        return view('admin.edit.news', ['app' => $app]);
    }

    public function update(Request $request, $id)
    {
        Event::where('id', $id)->update([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
        ]);

        return redirect(route('admin.news'));
    }

    public function destroy($id)
    {
        Event::where('id', $id)->delete();

        return redirect(route('admin.news'));
    }
}
