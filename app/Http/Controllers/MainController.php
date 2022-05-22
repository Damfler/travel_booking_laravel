<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Event;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MainController extends Controller
{

    public function index()
    {
        $rooms = Room::limit(3)->orderBy('created_at','DESC')->get();
        $comment = Comment::limit(3)->orderBy('created_at','DESC')->get();
        $events = Event::limit(3)->orderBy('created_at','DESC')->get();

        return view('index', [
            'rooms' => $rooms,
            'comment' => $comment,
            'events' => $events,
        ]);
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function events()
    {
        $events = Event::paginate(3);

        return view('events', [
            'events' => $events,
        ]);
    }

    public function rooms()
    {
        $rooms = Room::get();

        $roomsElite = Room::orderBy('price', 'desc')->limit(2)->get();

        return view('rooms', [
            'rooms' => $rooms,
            'roomsElite' => $roomsElite
        ]);
    }

    public function reservation()
    {
        return view('reservation');
    }
}
