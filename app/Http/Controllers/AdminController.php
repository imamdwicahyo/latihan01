<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user.index', ['users' => $users]);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        User::create([
            'name' => $name,
            'email' => $email
        ]);

        return redirect(route('users-create'));
    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
