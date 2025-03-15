<?php

namespace App\Http\Controllers;

// @phpstan-ignore-next-line
#[Middleware('auth')]
// @phpstan-ignore-next-line
#[Middleware('role:admin')]

class AdminController extends Controller
{
    public function AdminDashboard()
    {
        return view('admin.index');
    }
}
