<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Auth;


class CustomAuthController extends Controller
{
    public function login(LoginRequest $request)
    {
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
            return redirect("home");
        }
        return redirect("acp.login");
    }
}
