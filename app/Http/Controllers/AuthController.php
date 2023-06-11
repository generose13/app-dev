<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;




class AuthController extends Controller
{

    // Show login form
    public function showLoginForm()
    {
        return view('auth.login');
    }


    // Handle login request
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'student_ID' => 'required|student_ID',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/student-clearance-status');
        } else {
            // Authentication failed
            return back()->withErrors([
                'message' => 'The provided credentials do not match our records.',
            ]);
        }
    }

    // Handle logout request
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    // Show registration form
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    // Handle registration request
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required',
            'middle_initial' => 'required',
            'last_name' => 'required',
            'student_ID' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'college' => 'required',
            'year_level' => 'required',
            'course' => 'required',
            'section' => 'required',
        ]);

        // Create a new user record
        $user = new User;
        $user->first_name = $validatedData['first_name'];
        $user->middle_initial = $validatedData['middle_initial'];
        $user->last_name = $validatedData['last_name'];
        $user->student_ID = $validatedData['student_ID'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        $user->college = $validatedData['college'];
        $user->year_level = $validatedData['year_level'];
        $user->course = $validatedData['course'];
        $user->section = $validatedData['section'];
        $user->save();


        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        return redirect()->intended('/login'); // Redirect to the desired page after registration
    }
}
