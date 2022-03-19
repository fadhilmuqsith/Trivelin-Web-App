<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('register');
    }

    public function createData(Request $request){
        $validated = $request->validate([
            'first_name' => 'required|max:20',
            'last_name' => 'required|max:20',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8'
        ]);
        $user = [
            'fullname' => $validated['first_name'].' '. $validated['last_name'],
            'email' => $validated['email'],
            'password' => bcrypt($validated['password'])
         
        ];

        User::create($user);

        return redirect("/admin/login")->with('success', 'Registrasi Berhasil ');
    }
}
    
