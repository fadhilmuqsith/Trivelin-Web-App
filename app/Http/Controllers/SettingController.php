<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException as ValidationValidationException;

class SettingController extends Controller
{
    /*
     * Ensure the user is signed in to access this page
     */
    public function __construct()
    {

        $this->middleware('auth');
    }
    /**
     * Show the form to change the user password.
     */
    public function index()
    {
        return view('admin_setting', [
            "title" => "Setting",
        ]);
    }

    /**
     * Update the password for the user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'old' => 'required',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = User::find(Auth::id());
        $hashedPassword = $user->password;

        if (Hash::check($request->old, $hashedPassword)) {
            //Change the password
            $user->fill([
                'password' => Hash::make($request->password)
            ])->save();

            return redirect()->route('password.form')->with('success', 'Update Password Berhasil!');
        }

        return redirect()->route('password.form')->with('error', 'Update Password gagal!');
    }
}
