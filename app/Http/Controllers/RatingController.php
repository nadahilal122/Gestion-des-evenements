<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function index(){
        $Likes =Feedback::paginate(8);
        return view('Rating',compact('Likes'));
    }
}
