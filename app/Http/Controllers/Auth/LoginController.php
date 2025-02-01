<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected $redirectTo = '/dashboard';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    /**
     * Menampilkan halaman login.
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Melakukan proses login dengan email atau nomor telepon.
     */
    public function login(Request $request)
    {
        $request->validate([
            'email_or_phone' => 'required',
            'password' => 'required',
        ]);

        // Cek apakah input adalah email atau nomor telepon
        $field = filter_var($request->email_or_phone, FILTER_VALIDATE_EMAIL) ? 'email' : 'phone';

        $credentials = [
            $field => $request->email_or_phone,
            'password' => $request->password,
        ];

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/dashboard')->with('success', 'Login Berhasil');
        }

        return back()->withErrors(['email_or_phone' => 'Email atau Nomor Telepon tidak valid'])->withInput();
    }

    /**
     * Logout pengguna.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Logout berhasil');
    }
}
