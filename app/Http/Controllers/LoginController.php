<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('login.portal');
        
    }
    public function login()
    {
        return view('auth.login');
        
    }

    public function main()
    {
        return view('login.main');
        
    }
}
