<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('index', compact('users'));
    }

    public function store(Request $request)
    {
        $user = $request->only(['name']);
        Todo::create($user);

        return redirect('/login');
    }
}
