<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Event;
use App\Models\Room;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard', ['app' => '', 'name' => 'Главная']);
    }

    public function rooms()
    {
        $app = Room::get();

        return view('admin.dashboard', ['app' => $app, 'name' => 'Комнаты']);
    }

    public function comment()
    {
        $app = Comment::get();

        return view('admin.dashboard', ['app' => $app, 'name' => 'Комментарии']);
    }

    public function news()
    {
        $app = Event::get();

        return view('admin.dashboard', ['app' => $app, 'name' => 'События']);
    }
}
