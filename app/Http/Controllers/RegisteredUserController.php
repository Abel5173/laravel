<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    public function create() {
        // dd('create');
        return view('auth.register');
    }

    public function store(Request $request) {
        // Validate 
        $userAttributes = $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password'=> ['required', Password::min(6), 'confirmed']
        ]);

        $employerAttributes = request()->validate([
            'name' => ['required'],
            'logo' => ['required', File::types(['jpg', 'png', 'jpeg', 'svg', 'webp'])],
        ]);


        // Create the user
        $user = User::create($userAttributes);
        
        $logoPath = $request->logo->store('logos');

        $user->employer()->create([
            'name' => $employerAttributes['name'],
            'logo' => $logoPath,
        ]);

        // Log in
        Auth::login($user);

        // Redirect
        return redirect('/jobs');

        // dd($request->all());
    }
}
