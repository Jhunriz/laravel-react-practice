<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class LoginController extends Controller
{
    public function showLogin1() {
        return Inertia::render('Post/Login1');
    }

    public function showRegister1() {
        return Inertia::render('Post/Registration1');
    }
}
