<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $read = User::all();

        return view('adminpage.user.adminuser', compact('read'));
    }

    public function add()
    {
        return view('adminpage.order.add');
    }

    public function edit()
    {
        return view('adminpage.order.edit');
    }
}
