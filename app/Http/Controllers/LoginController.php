<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class LoginController extends Controller
{
    protected function guard()
{
    return Auth::guard('guard-name','guard-email','guard-password' );
}
    public function login() {
        return view('/auth/login');
    }
    public function register() {
        return view('/auth/register');
    }
    public function reset() {
        return view('/auth/passwords/reset');
    }
    public function dashboard() {
        return view('/dashboard');
    }
    
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);
        
        $user = User::create(request(['name', 'email', 'password']));
        
        auth()->$user;
        
        return redirect()->to('/auth/login');
    }
}