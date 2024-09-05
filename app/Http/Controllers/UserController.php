<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    # Return login page: 
    public function create()
    {
        # if user already logged in or not:
        if(!Auth::check())
        {
            return view('auth.login');
        }
        return redirect()->route('home.create')->with('success', __('messages.you_are_already_logged_in'));
    }

    # Login proccesses:
    public function store(Request $request)
    {
        
        $validating = $request->validate([
            'email' => ['required', 'email'] ,
            'password' => ['required', 'min:6'],
        ]);
        
        if(Auth::attempt($validating))
        {
            $request->session()->regenerate();
            return redirect()->route('home.create')->with('success', __('messages.you_have_successfully_logged_in'));
        }
        return redirect()->back()->with('failed', __('messages.your_information_is_not_correct'));
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        return redirect()->route('login.create');
    }
}
