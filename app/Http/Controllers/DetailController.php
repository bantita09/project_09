<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
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
        // return view('home');
        return view('adminpage.detail.admindetail');
    }

    public function add()
    {
        return view('adminpage.detail.add');
    }

    public function edit()
    {
        return view('adminpage.detail.edit');
    }
}
