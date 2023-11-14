<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('Login');
    }

    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    //     if (Auth::attempt($credentials)) {
    //         return redirect('/profile');
    //     }

    //     return back()->withErrors(['email' => 'Invalid email or password']);
    // }


    // app/Http/Controllers/AuthController.php

    public function validateLogin(Request $request)
    {
        $request->validate([
            'phone' => 'required|string',
            'password' => 'required|string',
        ]);
    }
    public function login(Request $request)
    {
        dd($request->all());
        // $phone = $request->input('phone');
        // $password = $request->input('password');

        // $user = User::where('phone', $phone)->first();

        // if ($user && $password === 'your_custom_password') {
        //     // ล็อกอินสำเร็จ
        //     return redirect()->route('dashboard'); // เปลี่ยนเส้นทางตามที่คุณต้องการ
        // }

        // // ล็อกอินไม่สำเร็จ
        // return back()->withErrors([
        //     'phone' => 'Invalid credentials.',
        // ]);
    }

    public function __construct()
    {
        $this->middleware('auth')->except(['login']);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
