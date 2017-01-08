<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        $user = User::where('email', $credentials['email'])->first();

        if (!$user) {
            return response()->json([
                'error' => 'Invalid credentials'
            ], 401);
        }


        if (!$credentials['password'] == $user->password) {
            return response()->json([
                'error' => 'Invalid credentials'
            ], 401);
        }

        return response()->json([
           'message' => 'credenciado'
        ], 200);
    }
}
