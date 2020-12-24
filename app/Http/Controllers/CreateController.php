<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'username' => 'required|min:5',
            'name' => 'required|min:10',
            'password' => 'required|min:8|max:16|confirmed',
            'email' => 'required|email',
            'mobile' => 'required|digits:14',
        ]);
    }
}
