<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function show(){
        return view('login');
    }

    public function login(LoginRequest $request){
        $credentials = $request->getcredentials();

        if(!Auth::validate($credentials)):
            return redirect()->to('login')
                ->withErrors(trans('auth.failed'));
        endif;
        $user = Auth::getProvider()->retrieveByCredentials($credentials);
        Auth::login($user);

        return redirect('/dashboard')->with('succes', "Akun berhasil login");
        
    }

    public function logout(){
        flush();
        Auth::logout();
        return redirect('login');
    }
}
