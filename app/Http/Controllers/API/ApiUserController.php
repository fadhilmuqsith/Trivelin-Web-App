<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Exception;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Rules\Password;

class ApiUserController extends Controller
{
    public function fetch(Request $request)
    {
        return $request->user();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function login(Request $request)
    {
        try {
            $request->validate([
                'email' => 'email|required',
                'password' => 'required'
            ]);

            $credentials = request(['email', 'password']);
            if (!Auth::attempt($credentials)) {
                return ["auth" => "Authentication Failed"];
            }

            $user = User::where('email', $request->email)->first();
            if ( ! Hash::check($request->password, $user->password, [])) {
                throw new \Exception('Invalid Credentials');
            }

            $tokenResult = $user->createToken('authToken')->plainTextToken;
            return ['access_token' => $tokenResult,
            'token_type' => 'Bearer',
            'user' => $user];
        } catch (Exception $error) {
            return ["auth" => "Something wnet wrong"];
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     * @throws \Exception
     */
    public function register(Request $request)
    {
        try {
            $validated = $request->validate([
                'first_name' => 'required|max:20',
                'last_name' => 'required|max:20',
                'email' => 'required|email:dns|unique:users',
                'password' => 'required|min:8'
            ]);
            $users = [
                'fullname' => $validated['first_name'].' '. $validated['last_name'],
                'email' => $validated['email'],
                'password' => bcrypt($validated['password'])
             
            ];

            User::create($users);

            $user = User::where('email', $request->email)->first();

            $tokenResult = $user->createToken('authToken')->plainTextToken;

            return['access_token' => $tokenResult,
            'token_type' => 'Bearer',
            'user' => $user];
        } catch (Exception $error) {
            return ["auth" => "Something wnet wrong"];
        }
    }

    public function logout(Request $request)
    {
        $token = $request->user()->currentAccessToken()->delete();

        return $token;
    }
}
