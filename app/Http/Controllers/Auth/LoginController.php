<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct(){
        $this->middleware(['guest'])->except('logout');
    }

    public function index(){
        return view('auth.login');
    }

    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (!auth()->attempt($credentials)) {
            if (!User::where('email', $request->email)->exists()) {
                return back()->with(['message' => 'Email Yang Anda Masukan Salah !', 'status' => 'danger']);;
            } else {
                return back()->with(['message' => 'Password Yang Anda Masukan Salah !', 'status' => 'danger']);
            }
        }       

        // dd Auth user dan role nya
        // dd(Auth::user()->getRoleNames());


        return redirect()->route('dashboard')->with(['message' => 'Login Berhasil !', 'status' => 'success']);
    }

    public function logout(){
        auth()->logout();

        return redirect('/login');
    }
}
