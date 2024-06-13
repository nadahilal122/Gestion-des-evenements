<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Client;

class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $login = $request->input('login');
        $password = $request->input('password');

        // Check if the credentials match "Admin" and "AdminAdmin"
        if ($login === 'Admin' && $password === 'AdminAdmin') {
            // Fetch the admin user from the database
            $adminUser = Client::where('username', 'Admin')->first();

            if ($adminUser && Hash::check($password, $adminUser->password)) {
                // Log in the admin user
                Auth::login($adminUser);
                $request->session()->regenerate();
                return redirect()->route('dashboard')->with('success', 'Welcome, Admin!');
            }
        }

        $credentials = ['username' => $login, 'password' => $password];

        if (Auth::attempt($credentials, $request->has('remember'))) {
            $request->session()->regenerate();
            return redirect()->route('home')->with('success', 'Login successful');
        }

        return back()->withErrors([
            'message' => 'Invalid username or password',
        ])->withInput($request->only('login', 'remember'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
