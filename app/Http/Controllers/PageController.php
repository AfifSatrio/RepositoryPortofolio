<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function form()
    {
        return view('form');
    }

    public function submit(Request $request)
    {
        $username = $request->input('username');
        $email = $request->input('email');

        return redirect('/')->with('success', 'Form submitted successfully!');
    }
}
