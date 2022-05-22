<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function create()
    {
        return view('admin.add.comments');
    }

    public function store(Request $request)
    {
        $image_name = "1_" . time() . "_" . rand() . "." . $request->file("image")->extension();
        $request->file("image")->move(public_path("images/"), $image_name);
        $path = "images/" . $image_name;

        Comment::insert([
            'name' => $request->input('name'),
            'photo' => $path,
            'comment' => $request->input('comment'),
        ]);

        return redirect(route('admin.comment'));
    }


    public function edit($id)
    {
        $app = Comment::where('id', $id)->first();

        return view('admin.edit.comments', ['app' => $app]);
    }

    public function update(Request $request, $id)
    {
        $app = Comment::where('id', $id)->first();

        if (!empty($request->file("image"))) {
            $image_name = "1_" . time() . "_" . rand() . "." . $request->file("image")->extension();
            $request->file("image")->move(public_path("images/"), $image_name);
            $path = "images/" . $image_name;
        } else {
            $path = $app->image;
        }

        Comment::where('id', $id)->update([
            'name' => $request->input('name'),
            'photo' => $path,
            'comment' => $request->input('comment'),
        ]);

        return redirect(route('admin.comment'));
    }

    public function destroy($id)
    {
        Comment::where('id', $id)->delete();

        return redirect(route('admin.comment'));
    }
}
