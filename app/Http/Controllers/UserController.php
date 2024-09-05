<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    # Return login page: 
    public function create()
    {
        return view('auth.login');
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
            return redirect()->route('home')->with('success', __('messages.you_have_successfully_logged_in'));
        }
        return redirect()->back()->with('failed', __('messages.your_information_is_not_correct'));
    }
}
