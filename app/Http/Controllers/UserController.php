<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{
    //
    function getAllUserData()
    {
        return User::all();
    }

    function getOneUserData()
    {
        $user = auth()->user();
        return $user;
        return view('user');
    }
}
