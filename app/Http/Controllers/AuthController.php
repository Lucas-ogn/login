<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function dashboard(Request $request){
        if (Auth::check()){
            return view('profile');
        }
        return redirect('/');
    }
    public function login(Request $request){
        $credentials = ['email' => $request->email, 'password'=>$request->password];
        if(Auth::Attempt($credentials)){
            return redirect('/perfil');
        }
        return redirect('/')->with('msg', 'Os dados estão incorretos!');
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}
