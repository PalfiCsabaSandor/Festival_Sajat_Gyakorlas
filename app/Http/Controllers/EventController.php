<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{


    public function getAllEventData()
    {
        $eventsList = Event::with('festival')->get();

        return view('events', ["eventData" => $eventsList]);
    }

    public function updateUserEvents(Request $request)
    {
        $authenticatedUser = Auth::user();
        $authenticatedUser->events()->detach();
        $authenticatedUser->events()->attach($request->events);
        return $this->getAllEventData();

    }



}