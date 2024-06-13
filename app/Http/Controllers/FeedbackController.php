<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index(){
        return view('feedback');
    }
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'comments' => 'required|string|max:255',
        ]);
    
        // Create a new Feedback instance
        $feedback = new Feedback();
        $feedback->client_id = auth()->id();
        $feedback->event_id = $request->input('event_id'); // Assuming you're using Laravel's authentication
        $feedback->comments = $validatedData['comments'];
        // Add any additional fields you need here
    
        // Save the feedback
        $feedback->save();
    
        // Redirect back or do whatever you need
        return redirect()->back()->with('success', 'Feedback submitted successfully!');
    }
}
