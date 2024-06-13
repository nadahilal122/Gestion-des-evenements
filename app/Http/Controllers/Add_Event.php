<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\event_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class Add_Event extends Controller
{
    public function index()
    {
        $event_type = event_type::all();
        return view('interface.Add_Event', compact('event_type'));
    }
    public function create()
    {
     return view('interface.Add_Event');
    }
   
    public function store(Request $request)
{
    // Check if the user is authenticated
    if (Auth::check()) {
        // Retrieve the authenticated user's ID
        $clientId = Auth::id();

        // Validate form fields
        $validatedData = $request->validate([
            'title' => 'required|string',
            'ville' => 'required|string',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'date' => 'required|date',
            'event_type_id' => 'required|exists:event_types,id',
            'description' => 'required|string',
        ]);
        
        // Handle file upload
        $photoPath = $request->photo; // Initialize with default value

        if ($request->hasFile('photo')) {
            // Store the photo in the storage/app/public directory
            $photoPath = $request->file('photo')->storeAs('public/profile_photos', $request->file('photo')->getClientOriginalName());
            // Remove the 'public/' part from the path as it's already included in the asset() function
            $photoPath = str_replace('public/', '', $photoPath);
        }

        // Create a new event with the provided data, including the client_id
        $event = Event::create([
            'title' => $validatedData['title'],
            'ville' => $validatedData['ville'],
            'photo' => $photoPath,
            'date_deput' => $validatedData['date'],
            'event_type_id' => $validatedData['event_type_id'],
            'description' => $validatedData['description'],
            'client_id' => $clientId, // Set the client_id to the ID of the authenticated user
        ]);
        
        // Store the eventId in the session
        $request->session()->put('eventId', $event->id);
        
        // Redirect to the ticket creation form and pass the event ID
        return redirect()->route('Add_Ticket_Basic')->with('success', 'Your event has been successfully created.');
    } else {
        // User is not authenticated, redirect to login
        return redirect()->route('login')->with('error', 'You must be logged in to create an event.');
    }
}

  
    public function show()
    {
       

    }

    
    public function edit($id)
    {
        // Logique pour afficher le formulaire de modification
    }

    public function update(Request $request, $id)
    {
        // Logique pour mettre à jour une ressource spécifique
    }

    
    public function destroy($id,)
    {
       
    }
}
