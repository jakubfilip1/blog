<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LoginController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('login');
    }

    public function login(Request $request): mixed
    {
        $admin = Admin::query()->where('login', '=', $request->get('login'))->first();

        if($admin && $admin->password = $request->get('password'))
        {
            session(['admin_login' => $admin->login]);

            return redirect()->route('home');
        }

        return view('login');
    }

    public function logout(): \Illuminate\Http\RedirectResponse
    {
        session(['admin_login' => null]);

        return redirect()->route('home');
    }
}
