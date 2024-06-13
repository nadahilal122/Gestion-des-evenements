<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\Feedback;
use Illuminate\Http\Request;

class home_interface extends Controller
{
    public function index(){
        $comments = Feedback::take(3)->get();
        $events = event::take(6)->get();
        return view('interface.home',compact('comments','events'));
    }
}
