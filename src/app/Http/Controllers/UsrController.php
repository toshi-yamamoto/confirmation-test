<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usr;
use App\Http\Requests\UsrRequest;

class UsrController extends Controller
{
    public function index()
    {
        $usrs = Usr::all();
        return view('auth.register', compact('usrs'));
    }

    public function store(UsrRequest $request)
    {
        $usr = $request->only(['name', 'email', 'password']);
        Usr::create($usr);
        return redirect('register');
    }

}
