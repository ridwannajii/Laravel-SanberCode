<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('form');
    }

    public function proses(Request $request)
    {
        $fname = $request["fname"];
        $lname = $request["lname"];
        return view('welcome', ['firstname' => $fname, 'lastname' => $lname]);
    }
}
