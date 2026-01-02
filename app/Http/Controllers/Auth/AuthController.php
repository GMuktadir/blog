<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\RegistrationRequest;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(RegistrationRequest $request)
    {
        // Registration logic here
    }
    public function login(LoginRequest $request)
    {
        // Login logic here
    }
}
