<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
// use App\User;
use App\Models\User;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registration.create');
    }

    public function store()
    {
        // dd(request()->all());
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);

        $user = User::create(request(['name', 'email', 'password']));

        auth()->login($user);
        return redirect()->to('login');

        // return redirect()->to('/games');
    }
}













