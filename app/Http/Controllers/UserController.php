<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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

    public function formadd()
    {
        return view('adminpage.user.add');
    }

    public function add(Request $request)
    {
        //C2->Create
        $request->validate([
            'name' => 'nullable',
            'email' => 'nullable',
            'password' => 'nullable',
        ]);

        User::create($request->all());

        return redirect()->route('adminpage.user.adminuser');
    }


    public function delete($id)
    {
        $read = User::find($id);

        $read->forcedelete();
        toast('Delete Successfully', 'success');

        return redirect()->route('adminpage.user.adminuser');
    }


    public function edit($id)
    {
        return view('adminpage.user.edit')->with('read', User::find($id));
    }


    public function update(Request $request, $id)
    {
        $read = User::find($id);
        $read->name = $request->name;
        $read->email = $request->email;
        $read->password = $request->password;
        $read->save();
        toast('Update Successfully', 'success');

        return redirect()->route('adminpage.user.adminuser');
    }
    // public function formedit()
    // {
    //     return view('adminpage.user.edit');
    // }

    // public function edit(Request $request)
    // {
    //     //U2->Update
    //     $request->validate([
    //         'name' => 'nullable',
    //         'email' => 'nullable',
    //         'password' => 'nullable',
    //     ]);

    //     User::updated($request->all());

    //     return redirect()->route('adminpage.user.adminuser');        }
}
