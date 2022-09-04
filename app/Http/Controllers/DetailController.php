<?php

namespace App\Http\Controllers;

use App\Models\Promote;
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
        $read = Promote::all();

        return view('adminpage.detail.admindetail', compact('read'));
    }

    public function formadd()
    {
        return view('adminpage.detail.add');
    }

    public function add(Request $request)
    {
        //C2->Create
        $request->validate([
            'name' => 'nullable',
            'detail' => 'nullable',
            'image' => 'nullable',
        ]);

        Promote::create($request->all());

        return redirect()->route('adminpage.detail.admindetail');    
    }

    public function formedit()
    {
        return view('adminpage.detail.edit');
    }

    public function edit(Request $request)
    {
        //U2->Update
        $request->validate([
            'name' => 'nullable',
            'detail' => 'nullable',
            'image' => 'nullable',
        ]);

        Promote::updated($request->all());

        return redirect()->route('adminpage.detail.admindetail');    
    }
}
