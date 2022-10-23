<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function show()
    {
        return view('contact');
    }
    public function submitted(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'sub' => 'required|max:80',
            'message' => 'required|max:250',
        ]);

        if ($validated) {
            $email = $request->email;
            $subject = $request->sub;
            $message = $request->message;

            return view('contactView')->with("email", $email)->with("subject", $subject)->with("mess", $message);
        }
    }
}