<?php

namespace App\Http\Controllers;

use inertia\inertia;
use Illuminate\Http\Request;

use App\Models\User;

class HomeController extends Controller
{
    public function home()
    {
        return Inertia::render('Home', [
            'currentPage' => 'home',
        ]);
    }

    public function profile()
    {
        $user = new User();
        $user->name = "Test baru";
        $user->email = 'test@gmail.com';

        return Inertia::render('Profile', [
            'currentPage' => 'profile',
            'user' => $user,
        ]);
    }
}
