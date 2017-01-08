<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UsersController extends Controller
{
    public function store(Request $request)
    {
        $user = new User();
        $user->fill($request->all());
        $user->save();

        return response()->json($user, 201);
    }
}
