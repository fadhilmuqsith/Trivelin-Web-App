<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        # code... 
        return view('login');
    }

    public function authenticate(Request $request)
    {
        # code...

        $validated = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        if (Auth::attempt($validated)) {
            # code...
            $request->session()->regenerate();
 
            return redirect()->intended('/admin');
        }

        return back()->with('failure', 'Login Gagal ');
    }

    public function logout(Request $request)
    {
        # code...
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/admin/login');
    }
}
