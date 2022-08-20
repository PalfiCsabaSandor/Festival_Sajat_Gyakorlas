<?php

namespace App\Http\Controllers;

use App\Models\Festival;
use Illuminate\Http\Request;

class FestivalController extends Controller
{
    public function index() {
        return view('festivals');
    }

    public function getAllFestivalData() {
        $alldata = Festival::all();

        return view('festivals', ["alldata"=>$alldata]);
    }

    public function details(Festival $festival)
    {
        $events = $festival->events;
//        $festival_name = $festival->name;
//        $festival_name = str_replace(' ', '', $festival_name);

        return view('festivalDetail', [
            'events' => $events,
            'festival' => $festival,
//          'name' => $festival_name[]
        ]);
    }
}
