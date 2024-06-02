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

    public function index()
    {
        // Ambil semua data pengguna
        $users = User::all();

        // Tampilkan ke view
        return view('user.index', compact('users'));
    }

}
