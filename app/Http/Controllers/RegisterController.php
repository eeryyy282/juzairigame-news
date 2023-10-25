<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function show(){
        return view('register');
    }

    public function register(RegisterRequest $request){
        $user = User::create($request->validated());
        auth()->login($user);
        return redirect('/')->with('success', 'Akun berhasil registrasi');
    }
}
