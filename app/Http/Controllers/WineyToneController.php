<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class WineyToneController extends Controller
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
        $read = Products::all();

        return view('adminpage.stock.winey-tone.adminwineytone', compact('read'));
    }

    public function formadd()
    {
        return view('adminpage.stock.winey-tone.add');
    }

    public function add(Request $request)
    {
        //C2->Create
        $request->validate([
            'name' => 'nullable',
            'detail' => 'nullable',
            'price' => 'nullable',
            'image' => 'nullable',
            'amount' => 'nullable',
        ]);

        Products::create($request->all());

        return redirect()->route('adminpage.stock.winey-tone.adminwineytone');
    }

    public function formedit()
    {
        return view('adminpage.stock.winey-tone.edit');
    }

    public function edit(Request $request)
    {
        //U2->Update
        $request->validate([
            'name' => 'nullable',
            'detail' => 'nullable',
            'price' => 'nullable',
            'image' => 'nullable',
            'Amount' => 'nullable',
        ]);

        Products::updated($request->all());

        return redirect()->route('adminpage.stock.winey-tone.adminwineytone');    
    }
}
