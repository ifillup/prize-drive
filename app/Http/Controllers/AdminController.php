<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    // public function boxes()
    // {
    //     return view('admin.boxes');
    // }
    // public function products()
    // {
    //     return view('admin.products');
    // }
    public function index()
    {
        $users = User::all();

        return view('admin.users', compact('users'));
    }
}
