<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth; // Pastikan ini yang diimport
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('user', [
            'user' => Auth::user(),
        ]);
    }
}
