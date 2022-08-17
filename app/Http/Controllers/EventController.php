<?php

namespace App\Http\Controllers;

use App\Models\Festival;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function getAllEventData()
    {
        $eventData = Festival::all();
        return view('events', ["eventData" => $eventData]);
    }
}