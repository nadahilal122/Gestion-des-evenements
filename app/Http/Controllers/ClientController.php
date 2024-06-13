<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ClientController extends Controller
{
    public function index()
    {
        $clients = client::paginate(6);
        return view('client',compact('clients'));
    }
    
    public function create()
    {
        return view('auth.login');
    }
   

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|unique:clients',
            'location' => 'required',
            'email' => 'required|email|unique:clients',
            'number' => 'required|max:10',
            'password' => 'required|min:6|max:20|confirmed',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming you want to upload a photo
        ]);
    
        $photoPath = $request->photo; // Initialize with default value
    
        if ($request->hasFile('photo')) {
            // Store the photo in the storage/app/public directory
            $photoPath = $request->file('photo')->storeAs('public/profile_photos', $request->file('photo')->getClientOriginalName());
            // Remove the 'public/' part from the path as it's already included in the asset() function
            $photoPath = str_replace('public/', '', $photoPath);
        }
    
        $clientData = [
            'username' => $request->username,
            'location' => $request->location,
            'email' => $request->email,
            'number' => $request->number,
            'password' => Hash::make($request->password),
            'photo' => $photoPath, // Store the photo path in the database
        ];
    
        Client::create($clientData);
    
        return redirect()->route('home')->with('success', 'Your data has been successfully inserted');
    }
  


    public function show($id)
    {
        $client = Client::find($id);
        $events = $client->events;
        return view('profile_dash', compact('client','events'));          
    }

   public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        $client = Client::find($id);
        $client->delete();
        return redirect()->route('client')->with('success', 'Client deleted successfully');
    }

}
