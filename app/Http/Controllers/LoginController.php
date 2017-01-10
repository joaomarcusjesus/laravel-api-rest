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
                'error' => 'Usuário não existe'
            ], 401);
        }


        if (!$credentials['password'] == $user->password) {
            return response()->json([
                'error' => 'Senha errada!'
            ], 401);
        }

        return response()->json([
           'message' => 'credenciado',
            'obj' => $user
        ], 200);
    }
}
