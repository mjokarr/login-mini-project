<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function create()
    {
        if(Auth::check())
        {
            return view('home');
        }
        return redirect()->route('login.create')->with('failed', __('messages.you_should_login_first'));
    }
}
