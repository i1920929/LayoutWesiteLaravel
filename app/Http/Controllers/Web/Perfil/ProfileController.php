<?php

namespace App\Http\Controllers\Web\Perfil;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function home() {
        return view('home');
    }

    public function about() {
        return view('perfil/about');
    }

    public function services() {
        return view('perfil/services');
    }

    public function blog() {
        return view('perfil/blog');
    }

    public function contact() {
        return view('perfil/contact');
    }
}
