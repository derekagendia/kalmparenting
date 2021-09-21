<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $data = [
            'events' => Event::orderBy('created_at', 'desc')->where('status','PUBLISHED')->paginate(6)
        ];
        return view('event.index',$data);
    }

    public function detail()
    {
        return view('event.detail');
    }
}
