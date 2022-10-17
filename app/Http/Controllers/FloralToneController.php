<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
        $read = Products::all();

        return view('adminpage.stock.floral-tone.adminfloraltone', compact('read'));
    }

    public function formadd()
    {
        //C1->Form
        return view('adminpage.stock.floral-tone.add');
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
        $filename = Str::random(10). '.' . $request->file('image')->getClientOriginalExtension();
        $request->file('image')->move(public_path().'/admin/upload/product', $filename);

        Products::create($request->all());

        return redirect()->route('adminpage.stock.floral-tone.adminfloraltone');
    }

    public function formedit()
    {
        //U1->Form
        return view('adminpage.stock.floral-tone.edit');
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

        return redirect()->route('adminpage.stock.floral-tone.adminfloraltone');
    }
}