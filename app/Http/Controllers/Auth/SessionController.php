<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SessionController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //validate
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        //authenticate
        if (Auth::attempt($validated)) {
            $request->session()->regenerate();
            return redirect('/ideas');
        }

        //if not authenticated, redirect back with validation error
        return redirect('/login')
            ->withErrors([
                'email' => 'Invalid credentials'
            ])
            ->withInput();
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        Auth::logout();
        return redirect('/ideas');
    }
}
