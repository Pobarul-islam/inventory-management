<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Mail\Websitemail;

class AdminLoginController extends Controller
{
    public function index()
    {
       
        return view('admin.login');
    }
    public function forget_password()
    {
        return view('admin.forget_password');
    }
}
