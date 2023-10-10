<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class ContactController extends Controller
{
    public function index(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        return view('contact');
    }
}
