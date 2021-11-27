<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class SpaController extends Controller
{
    public function index()
    {
        return Inertia::render('Home');
    }

    public function showLoginForm()
    {
        return Inertia::render('Auth/Login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        return redirect('/dashboard');
    }

    public function dashboard()
    {
        return Inertia::render('Admin/Dashboard');
    }
}
