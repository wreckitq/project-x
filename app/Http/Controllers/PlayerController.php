<?php

namespace App\Http\Controllers;

use App\User;

class PlayerController extends Controller
{
    public function index()
    {
        $users = User::with('profile')->paginate();

        return view('player.index', compact('users'));
    }
}
