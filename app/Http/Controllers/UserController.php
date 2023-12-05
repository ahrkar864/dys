<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('user.dashboard');
    }

    public function show()
    {
        // $all_user = User::paginate(10);
        // return view("admin.users", compact('all_user'));
        return view("admin.users");
    }
}
