<?php
namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Profil extends Controller
{
    /**
     * Display the authenticated user's profile.
     */
    public function index()
    {
        // Get the ID of the authenticated user
        $userId = Auth::id();

        // Retrieve the client record associated with the authenticated user
        $client = Client::find($userId);

        // Check if client record exists
        if ($client) {
            // If client record exists, return the view with the client data
            return view('interface.profil', compact('client'));
        } else {
            // If client record doesn't exist, return an error message or redirect to another page
            return back()->with('error', 'Client record not found.');
        }
    }

    /**
     * Show the form for editing the authenticated user's profile.
     */
    public function edit()
    {
        // Retrieve the authenticated client's data
        $client = auth()->user(); // Assuming you are using Laravel's built-in authentication

        // Pass the client data to the view
        return view('interface.editprofil', compact('client'));
    }

    /**
     * Update the authenticated user's profile.
     */
    public function update(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'email' => 'required|email|unique:clients,email,' . auth()->id(),
            'number' => 'required|string|max:255',
            'password' => 'nullable|string|min:8|confirmed',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Assuming you want to upload a photo
        ]);

        // Update the client's profile
        $client = auth()->user();
        $client = Client::find(auth()->id());
        if ($client) {
            $client->update($validatedData);
            // Handle photo upload if provided
            if ($request->hasFile('photo')) {
                $photoPath = $request->file('photo')->store('profile_photos');
                $client->photo = $photoPath;
                $client->save();
            }
            return redirect()->route('profil')->with('success', 'Profile updated successfully!');
        } else {
            // Handle case when client is not found
            // For example, redirect back with an error message
            return redirect()->back()->with('error', 'Client not found!');
        }
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
