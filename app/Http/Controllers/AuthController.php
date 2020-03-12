<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\User;
use App\Role;


use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
