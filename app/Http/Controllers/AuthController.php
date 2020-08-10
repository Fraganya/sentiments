<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $rules = [
            'email' => "required|email|unique:users,email",
            'name' => "required|string",
            'password' => "required|string|confirmed",
        ];

        $this->validate($request, $rules);

        $data = $request->except(['password', 'password_confirmation']);
        $data['password'] = Hash::make($request->input('password'));

        if (User::create($data)) {
            return response()->json(['message' => "success"], 201);
        }

        return response()->json(['message' => "something unexpected occurred"], 501);

    }

    public function authenticate(Request $request)
    {
        $rules = [
            'email' => "required|email",
            'password' => "required|string",
        ];

        $this->validate($request, $rules);

        $user = User::where('email', $request->input('email'))->first();

        if (Hash::check($request->input('password'), $user->password)) {
            $apiKey = Hash::make(Str::random(40));

            $user->update([
                'api_token' => $apiKey
            ]);

            $authData = ['message' => "authenticated", 'key' => $apiKey];
            return response()->json($authData, 201);
        }

        return response()->json(['message' => "failed"], 401);

    }

}
