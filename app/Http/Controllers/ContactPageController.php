<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactPageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

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

    public function contactpage()
    {
        return view('promotepage.contact');
    }

    public function add(Request $request)
    {
        //C2->Create
        $request->validate([
            'name' => 'nullable',
            'email' => 'nullable',
            'phone' => 'nullable',
            'message' => 'nullable',
        ]);

        Contact::create($request->all());

        return redirect()->route('contact');
    }

}
