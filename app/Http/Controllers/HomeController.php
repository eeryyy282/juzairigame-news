<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class HomeController extends Controller
{
    public function index(){
        $data_berita = User::all();
        return view('beranda', ['data_berita' => $data_berita]);
    }

    public function dashboard(){
        $data_berita = User::all();
        return view('dashboard', ['data_berita' => $data_berita]);
    }
}
