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
        $password = $request->password;

        User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password
        ]);

        return redirect(route('users-create'));
    }

    public function edit($user_id)
    {
        $user = User::where('id', '=', $user_id)->first();
        return view('user.update', ['user' => $user]);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        $user = User::find($id);
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->save();

        return redirect(route('users-create'));
    }

    public function delete($user_id)
    {
        $user = User::find($user_id);
        $user->delete();
        return redirect(route('users'));
    }
}
