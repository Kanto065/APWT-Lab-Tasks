<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function register()
    {
        return view('registration');
    }

    public function registerSubmit(Request $request)
    {
        $validated = $request->validate([
            'first-name' => 'required',
            'last-name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'address' => 'required|max:50',
            'password' => 'required|confirmed|min:4',
            // 'terms' => 'accepted'
        ]);

        return redirect()->route('log.in');
    }
}