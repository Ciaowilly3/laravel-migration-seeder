<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Train;
use DateTime;

class TrainsController extends Controller
{
    function index(){
        $oggi = new DateTime('now');
        $todayTrains = Train::all();
        return view("trains.trainsIndex", compact("todayTrains"));
    }
}
