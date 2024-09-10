<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create() {
        return view('auth.login');
    }

    public function store() {
        // dd(request()->all());
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (!Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Your provided credintials could not be verified.'
            ]);
        }

        request()->session()->regenerate();
        return redirect('/jobs');
    }

    public function destroy() {
        // dd('logout');
        Auth::logout();

        return redirect("/");
    }
}
