<?php

namespace App\Http\Controllers;

use App\Events\ContactEvent;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    public function contact(ContactRequest $request)
    {
        event(new ContactEvent($request->all()));

        return redirect()->back()->with('Thank for Joining');
    }
}
