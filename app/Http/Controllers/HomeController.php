<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $events = event::take(9)->get();
        $clients = Client::take(8)->get();
        return view('home', compact('events','clients'));

    }
}