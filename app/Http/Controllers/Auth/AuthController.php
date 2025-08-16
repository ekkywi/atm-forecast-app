<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

use App\Models\User;
use App\Models\UserToken;

class AuthController extends Controller
{
    // menampilkan form login
    public function showLoginForm()
    {
        return view('auth.login');
    }

    // menampilkan form registrasi
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    // menampilkan form lupa password
    public function showForgotPasswordForm()
    {
        return view('auth.forgot-password');
    }

    // menampilkan form aktivasi
    public function showActivationForm()
    {
        return view('auth.activation');
    }

    // registerasi user baru
    public function register(Request $request)
    {
        // validasi input
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'position' => 'required',
            'password' => 'required|confirmed|min:8'
        ]);

        // simpan data user
        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'position' => $request->position,
            'password' => Hash::make($request->password),
        ]);

        // buat token aktivasi
        $plainToken = Str::random(64);
        $hashedToken = Hash::make($plainToken);

        // simpan token aktivasi
        UserToken::create([
            'user_id' => $user->id,
            'token' => $hashedToken,
            'type' => 'activation',
            'is_used' => false,
        ]);

        return redirect()->route('login.form')->with('success', 'Registerasi berhasil, silahkan lakukan aktivasi akun anda.');
    }

    // login user
    public function login(Request $request)
    {
        // validasi input
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // ambil data user
        $user = User::where('username', $request->username)->first();

        // cek apakah user ditemukan
        if (!$user) {
            return back()->withErrors(['username' => 'Username tidak ditemukan']);
        }

        // cek apakah password sesuai
        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors(['password' => 'Password salah']);
        }

        // cek apakah akun diaktivasi
        if (!$user->is_active) {
            return back()->withErrors(['activation' => 'Akun anda belum diaktivasi. Silahkan lakukan aktivasi akun anda.']);
        }

        // login user
        auth()->login($user);

        // redirect ke halaman dashboard
        return redirect()->intended('dashboard');
    }
}
