<?php

namespace App\Http\Controllers;

use App\Event;

class EventController extends Controller
{
    public function index()
    {
        $data = [
            'events' => Event::orderBy('created_at', 'desc')->where('status', 'PUBLISHED')->paginate(6)
        ];
        return view('event.index', $data);
    }

    public function detail($slug)
    {
        return view('event.detail', ['event' => Event::where('slug', $slug)->firstOrfail()]);
    }
}
