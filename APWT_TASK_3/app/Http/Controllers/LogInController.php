<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogInController extends Controller
{
    public function login()
    {
        return view('logIn');
    }
    public function logInSubmit(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:4',
        ]);

        $users = array("kanto@mail.com" => "1234", "admin@mail.com" => "admin", "blackadam@mail.com" => "blackadam");

        if ($validated) {
            foreach ($users as $email => $pass) {
                if ($request->email == $email && $request->password == $pass) {
                    return redirect()->route('home');
                }
            }
        }
        return redirect()->route('log.in');
    }
}