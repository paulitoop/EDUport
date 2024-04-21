<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list()
    {
        $users = User::where('status', 'user')->get();
        return view('list', ['users' => $users]);
    }
}