<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
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
        $read = Contact::all();

        return view('adminpage.contact.admincontact', compact('read'));
    }

    public function detail($id)
    {
        return view('adminpage.contact.detail')->with('detail', Contact::find($id));
    }

}
