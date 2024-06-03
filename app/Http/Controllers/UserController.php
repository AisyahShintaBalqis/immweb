<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request){

        // dd($request->all());

        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:member,admin',
        ]);

        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }

    public function index()
    {
        // Ambil semua data pengguna
        $users = User::all();

        // Tampilkan ke view
        return view('user.index', compact('users'));
    }


}
