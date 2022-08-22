<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FloralToneController extends Controller
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
        return view('adminpage.stock.floral-tone.adminfloraltone');
    }

    public function add()
    {
        return view('adminpage.stock.floral-tone.add');
    }
}
