<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Log;


class UserController extends Controller
{
    //
    function getAllUserData()
    {
        return User::all();
    }

    function getLoggedUserData()
    {
        $user = auth()->user();
        $events = $user->events;
            Log::info($events);
        return view('user',['user'=>$user, 'events' => $events]);
    }
}
