<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Show Register/Create
    public function create()
    {
        return view('users.register');
    }

    // Show login form
    public function login()
    {
        return view('users.login');
    }
}
