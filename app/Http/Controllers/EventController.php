<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $data = [];

        foreach(Event::getAll() as $event) {
            if ($event['show']) {
                array_push($data, $event);
            }
        }

        return view('events', compact('data'));
    }

    public function detail(Request $request) {

        $slug = $request->query('title');
        $data = Event::find($slug);

        if(empty($data)) {
            return view('404');
        }

        return view('event-detail', compact('data'));
    }
}

