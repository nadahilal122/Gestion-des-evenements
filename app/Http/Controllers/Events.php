<?php

namespace App\Http\Controllers;

use App\Models\basic_ticket;
use App\Models\Client;
use App\Models\event;
use App\Models\event_type;
use App\Models\Feedback;
use App\Models\standart_ticket;
use App\Models\vip_ticket;
use Illuminate\Http\Request;

class Events extends Controller
{
    public function index()
    {
        $events =event::paginate(9);
        return view('interface.Events',compact('events'));
       
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
        $event = event::find($id);
        $cliento = Client::all();
        $basic = $event->basicTicket;
        $standart =$event->standartticket;
        $vip =$event->vipticket;
        $comments = Feedback::where('event_id', $id)->get();
        $client = Feedback::where('client_id', $id)->get();
        return view('interface.show_events', compact('event','comments','client','cliento','vip','basic','standart')); 
    }

    
    public function edit($id)
    {
        // Logique pour afficher le formulaire de modification
    }

    public function update(Request $request, $id)
    {
        // Logique pour mettre à jour une ressource spécifique
    }

    
 
}