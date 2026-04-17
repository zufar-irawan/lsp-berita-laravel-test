<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $user = DB::table('users')
            ->where('username', $request->username)
            ->where('password', md5($request->password))
            ->first();

        if ($user) {
            session(['login' => true]);
            return redirect('/berita');
        } else {
            return back()->with('error', 'Login gagal');
        }
    }

    public function logout()
    {
        session()->flush();
        return redirect('/login');
    }
}
