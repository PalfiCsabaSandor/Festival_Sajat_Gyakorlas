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
}
