<?php

namespace App\Http\Controllers;

use App\Models\basic_ticket as ModelsBasic_ticket;
use App\Models\event;
use Illuminate\Http\Request;




class basic_ticket extends Controller
{
    public function index(Request $request)
    {
        $eventId = $request->session()->get('eventId');
        return view('interface.Add_ticket_basic',compact('eventId'));
    }
   
    public function create()
    {
        // Logique pour afficher le formulaire de création
    }

    
   
    public function store(Request $request)
{
    // Validate the request data
    $validatedData = $request->validate([
        'price' => 'required|numeric|min:0',
        'quantity' => 'required|numeric|min:1',
    ]);

    // Retrieve the event ID from the session
    $eventId = $request->session()->get('eventId');

    // Create a new instance of the BasicTicket model with the validated data and event ID
    $basicTicket = ModelsBasic_ticket::create([
        'price' => $validatedData['price'],
        'quantity' => $validatedData['quantity'],
        'event_id' => $eventId, // Use the event ID obtained from the session
    ]);

    // Redirect back with a success message
    return redirect()->route('Add_Ticket_standart')->with('success', 'Basic Ticket added successfully!');
}

    
    public function show($id)
    {
        $event = event::find($id);
        $basic = $event->basicTicket;
        return view('ticket.basic',compact('basic','event'));

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
