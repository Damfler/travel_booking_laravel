<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function create()
    {
        return view('admin.add.rooms');
    }

    public function store(Request $request)
    {
        $image_name = "1_" . time() . "_" . rand() . "." . $request->file("image")->extension();
        $request->file("image")->move(public_path("images/"), $image_name);
        $path = "images/" . $image_name;

        Room::insert([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $path,
            'price' => $request->input('price'),
            'people' => $request->input('people'),
        ]);

        return redirect(route('admin.rooms'));
    }


    public function edit($id)
    {
        $app = Room::where('id', $id)->first();

        return view('admin.edit.rooms', ['app' => $app]);
    }

    public function update(Request $request, $id)
    {
        $app = Room::where('id', $id)->first();

        if (!empty($request->file("image"))) {
            $image_name = "1_" . time() . "_" . rand() . "." . $request->file("image")->extension();
            $request->file("image")->move(public_path("images/"), $image_name);
            $path = "images/" . $image_name;
        } else {
            $path = $app->image;
        }

        Room::where('id', $id)->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => $path,
            'price' => $request->input('price'),
            'people' => $request->input('people'),
        ]);

        return redirect(route('admin.rooms'));
    }

    public function destroy($id)
    {
        Room::where('id', $id)->delete();

        return redirect(route('admin.rooms'));
    }
}
