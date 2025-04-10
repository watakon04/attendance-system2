<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class MemberController extends Controller
{
    public function index()
    {
        $users = User::all(); 

        return view('admin.members.index', compact('users'));
    }
}

