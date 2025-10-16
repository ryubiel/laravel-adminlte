<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create() {
        return view('users.create');
    }

    public function store(Request $request) {
        $input = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        User::create($input);

        return back()->with('status', 'Usuário adicionado com sucesso!');
    }

    public function edit(User $user) {
        return view('users.edit', compact('user'));
    }

    public function update(User $user, Request $request) {
        $input = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'exclude_if:password,null|min:6',
        ]);
        $user->fill($input)->save();

        return back()->with('status', 'Usuário editado com sucesso!');
    }
}
