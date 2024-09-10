<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create() {
        // dd('create');
        return view('auth.register');
    }

    public function store() {
        // Validate 
        $attributes = request()->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email'],
            'password'=> ['required', Password::min(6), 'confirmed']
        ]);

        //dd($attributes);
        // Create the user
        $user = User::create($attributes);

        // Log in
        Auth::login($user);

        // Redirect
        return redirect('/jobs');

    }
}
