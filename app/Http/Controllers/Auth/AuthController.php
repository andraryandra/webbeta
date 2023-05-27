<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect()->route('admin.home');
            } elseif ($user->role == 'manager') {
                return redirect()->route('manager.home');
            } elseif ($user->role == 'user') {
                return redirect()->route('landingPage');
            } else {
                return redirect()->route('home');
            }
        }

        return view('auth.login');
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function registration()
    {
        if (Auth::check()) {
            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect()->route('admin.home');
            } elseif ($user->role == 'manager') {
                return redirect()->route('manager.home');
            } elseif ($user->role == 'user') {
                return redirect()->route('landingPage');
            } else {
                return redirect()->route('home');
            }
        }
        return view('auth.registration');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        if (Auth::check()) {
            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect()->route('admin.home');
            } elseif ($user->role == 'manager') {
                return redirect()->route('manager.home');
            } elseif ($user->role == 'user') {
                return redirect()->route('landingPage');
            } else {
                return redirect()->route('home');
            }
        }

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role == 'admin') {
                return redirect()->route('admin.home')->withSuccess('You have successfully logged in as admin.');
            } elseif ($user->role == 'manager') {
                return redirect()->route('manager.home')->withSuccess('You have successfully logged in as manager.');
            } elseif ($user->role == 'user') {
                return redirect()->route('landingPage');
            } else {
                return redirect()->route('home')->withSuccess('You have successfully logged in.');
            }
        } else {
            return redirect()->route('login')->with('error', 'Invalid credentials.');
        }

        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function postRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function logout()
    {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
