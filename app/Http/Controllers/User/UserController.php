<?php

namespace App\Http\Controllers\User;

use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'position' => ['required', 'string'],
            'password' => ['required', 'string', 'min:10', 'confirmed'],
            'token' => ['nullable', 'string', 'max:15'],
            'is_active' => ['boolean'],
        ]);

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'position' => $request->position,
            'password' => $request->password,
            'token' => Str::random(15),
            'is_active' => false,
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silahkan aktivasi akun anda.');
    }
}
