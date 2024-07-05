<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    protected $redirectTo = '/dashboard';

    public function index()
    {
        // $data = User::all();
        return view('Auth.login');
    }

    public function register(){
        $data['title'] = 'Register';
        return view('/register',$data);
    }

    public function register_action(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:user',
            'password' => 'required',
            'password_confirmation' => 'required|same:password'
        ],[
            'name.required' => 'Nama Wajib Diisi!',
            'email.required' => 'email Wajib Diisi!',
            'password.required' => 'Password Wajib Diisi!',
            'password_confirmation.required' => 'Password Confirmation Wajib Diisi!',
        ]);

        $user = new User([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        $user -> save();
         return redirect()->route('login')->with('success', 'Registrasi Berhasil. Silakan Login!');
    }

    public function login()
    {
        $data['title'] = 'Login';
        return view('Auth.login',$data);
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required' => 'Email Wajib Diisi!',
            'password.required' => 'Password Wajib Diisi!',
        ]);
        if(Auth::attempt($request->only('email','password'))){
            $request->session()->regenerate();
            // Cek email yang login
            if ($request->email == 'admin@gmail.com') {
                return redirect()->intended('/home');
            } elseif ($request->email == 'lurah@gmail.com') {
                return redirect()->intended('/lurah');
            }
            // Redirect default jika email tidak sesuai dengan yang diinginkan
            return redirect()->intended('/');
        }
        return back()->withErrors([
            'password' => 'Password atau email Salah!',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
