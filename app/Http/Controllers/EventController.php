<?php

namespace App\Http\Controllers;

use App\Models\event;
use App\Models\event_type;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        $events =event::paginate(8);
        return view('event',compact('events'));
    }
    public function home()
    {
        $events = event::all();
        return view('components.nav_interface',compact('events'));

    }
    public function types()
    {
        $events_types = event_type::paginate(8);
        return view('events_types',compact('events_types'));

    }
    
    public function create()
    {
        // Logique pour afficher le formulaire de création
    }

    
    public function store(Request $request)
    {
        // Logique pour stocker une nouvelle ressource
    }

    
    public function show($id)
    {
        // Logique pour afficher une ressource spécifique
    }

    
    public function edit($id)
    {
        // Logique pour afficher le formulaire de modification
    }

    public function update(Request $request, $id)
    {
        // Logique pour mettre à jour une ressource spécifique
    }

    
    public function destroy($id)
    {
       $events=event::find($id);
       $events->delete();
       return redirect()->route('dashboard')->with('success', 'event deleted successfully');
    }
    public function delete($id,)
    {
        $events_type=event_type::find($id);
        $events_type->delete();
        return redirect()->route('events_types')->with('success', 'event type deleted successfully');
    }
    public function createEvent()
{
    return view('add_events_types');
}

public function storeEvent(Request $request)
{
    $request->validate([
        'event_type' => 'required|string|max:255',
    ]);

    event_type::create([
        'event_type' => $request->event_type,
    ]);

    return redirect()->route('events_types')->with('success', 'Event type added successfully');
}
}
