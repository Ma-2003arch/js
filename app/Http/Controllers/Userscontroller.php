<?php

namespace App\Http\Controllers;
use App\Models\user;
use Illuminate\Http\Request;

class Userscontroller extends Controller
{
    public function index()
    {
        $users = User::paginate(10); // Pagination avec 10 utilisateurs par page
        return view('users-create', compact('users'));
    }
}
