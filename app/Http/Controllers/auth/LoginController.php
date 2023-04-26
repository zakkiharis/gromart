<?php

namespace App\Http\Controllers\Auth;

use Inertia\Inertia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return Inertia::render('admin/auth/login', [
            "title" => 'Grocery | Login'
        ]);
    }


    public function login(Request $request)
    {
        
    }
}
