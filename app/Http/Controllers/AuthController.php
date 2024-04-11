<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\AddAdmin;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function loadRegister()
    {
        if (Auth::user()) {
            $route = $this->redirectDash();
            return redirect($route);
        }
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'string|required|min:2',
            'email' => 'string|email|required|max:100|unique:admin',
            'password' => 'string|required|confirmed|min:8'
        ]);

        $user = new AddAdmin;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return back()->with('success', "You have successfully registered!");
    }

    public function loadLogin()
    {
        if (Auth::user()) {
            $route = $this->redirectDash();
            return redirect($route);
        }
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'string|required|email',
            'password' => 'string|required'
        ]);

        $userCredential = $request->only('email', 'password');
        if (Auth::attempt($userCredential)) {

            $route = $this->redirectDash();
            return redirect($route);
        } else {
            return back()->with('error', 'Email & Password is incorrect');
        }
    }

    public function loadDashboard()
    {
        return view('user.home');
    }

    public function redirectDash()
    {
        $redirect = '';

        if (Auth::user() && Auth::user()->role == 'super-admin') {
            $redirect = 'super';
        } elseif (Auth::user() && Auth::user()->role == 'admin') {
            $redirect = 'admin';
        } else {
            $redirect = 'user';
        }
        return $redirect;
    }


    public function delete2($id)
    {
        $data = AddAdmin::find($id);

        $data->delete();
        return back();
    }


    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect('/');
    }
}
