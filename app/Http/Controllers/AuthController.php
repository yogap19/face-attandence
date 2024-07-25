<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    function login()
    {
        $data = [
            'response_attandance' => Attendance::all()
        ];
        return view('Authentication/login', $data);
    }
    function _login(Request $request)
    {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            // cek status active akun
            if (Auth::user()->status != 'active') {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();

                Session::flash('status', 'failed');
                Session::flash('message', 'Your account is not active yet, please contact admin!');
                return redirect('/login');
            }

            $request->session()->regenerate();

            if (Auth::user()->role_id == 1) {
                return redirect('/dashboard');
            } elseif (Auth::user()->role_id == 2) {
                return redirect('/profile');
            } else {
                return redirect('/book');
            }
        }

        // Set flash message for invalid login attempt
        Session::flash('status', 'failed');
        Session::flash('message', 'Login invalid');
        return redirect('/login');
    }
    function registration()
    {
        $data = [
            'response_attandance' => Attendance::all()
        ];
        return view('Authentication/registration', $data);
    }
    function _registration(Request $request)
    {
        $validated = $request->validate([
            'username'     => 'required|unique:users|max:255',
            'password1'    => 'required|max:255|min:6',
            'password2'    => 'same:password1',
            'email'        => 'required|max:255',
        ]);
        $request['password'] =  Hash::make($request->password1);
        $user = User::create($request->all());

        Session::flash('status', 'success');
        Session::flash('message', 'Register success, wait admin for approval');
        return redirect('registration');
    }

    function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('login');
    }
}
