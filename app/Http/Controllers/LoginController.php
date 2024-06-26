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
            return redirect()->intended('/home');
            return redirect()->intended('/lurah');
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

    public function create()
    {
        return view('dashboard.DataUser.create');
    }

    public function store(Request $request)
    {
        Session::flash('nama', $request->name);
        Session::flash('email', $request->email);

        $request->validate([
            'email'=>'required|unique:dataaslab',
            'nama'=>'required',
        ]);

        $data=[
            'nama'=>$request->name,
            'email'=>$request->email,
        ];
        User::create($data);

        return redirect()->route('datauser.index')->with('success', 'Berhasil Menambahkan Data');

    }
}
