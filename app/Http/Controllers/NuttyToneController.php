<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NuttyToneController extends Controller
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
        return view('adminpage.stock.nutty-tone.adminnuttytone');
    }

    public function add()
    {
        // return view('home');
        return view('adminpage.stock.nutty-tone.add');
    }
}
