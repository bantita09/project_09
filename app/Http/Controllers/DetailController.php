<?php

namespace App\Http\Controllers;

use App\Models\Promote;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

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
        $detail = Promote::all();

        return view('adminpage.detail.admindetail', compact('detail'));

        // $read = Products::all();

        // return view('adminpage.detail.admindetail', compact('read'));
    }

    public function formadd()
    {
        //C1->Form
        return view('adminpage.detail.add');
    }

    public function add(Request $request)
    {
        $detail = new Promote();
        $detail->name = $request->name;
        $detail->detail = $request->detail;
        $detail->type_product = $request->type_product;

        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/upload/promote/', $filename);
            Image::make(public_path() . '/admin/upload/promote/' . $filename);
            $detail->image = $filename;
        }else {
            $detail->image = 'nopic.png';
        }
        $detail->save();
        toast('Save Successfully', 'success');

        return redirect()->route('adminpage.detail.admindetail');

        // C2->Create
        // $request->validate([
        //     'name' => 'nullable',
        //     'detail' => 'nullable',
        //     'price' => 'nullable',
        //     'image' => 'nullable',
        //     'Amount' => 'nullable',
        // ]);

        // Products::create($request->all());

        // return redirect()->route('adminpage.stock.floral-tone.adminfloraltone');
    }

    public function delete($id)
    {
        $detail = Promote::find($id);

        if ($detail->image != 'nopic.png') {
            File::delete(public_path() . '/admin/upload/promote/' . $detail->image);
        }
        $detail->forcedelete();
        toast('Delete Successfully', 'success');

        return redirect()->route('adminpage.detail.admindetail');
    }

    public function edit($id)
    {
        return view('adminpage.detail.edit')->with('detail', Promote::find($id));
    }

    public function update(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $detail = Promote::find($id);
            $detail->name = $request->name;
            $detail->detail = $request->detail;
            $detail->image = $request->image;
            $detail->type_product = $request->type_product;

            if ($detail->image != 'nopic.png') {
                File::delete(public_path() . '/admin/upload/promote/' . $detail->image);
            }

            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/upload/promote/', $filename);
            Image::make(public_path() . '/admin/upload/promote/' . $filename);
            $detail->image = $filename;
        }
        $detail = Promote::find($id);
        $detail->name = $request->name;
        $detail->detail = $request->detail;
        $detail->type_product = $request->type_product;
        $detail->save();
        toast('Update Successfully', 'success');

        return redirect()->route('adminpage.detail.admindetail');
    }

    // public function formedit()
    // {
    //     //U1->Form
    //     return view('adminpage.stock.floral-tone.edit');
    // }

    // public function edit(Request $request)
    // {
    //     //U2->Update
    //     $request->validate([
    //         'name' => 'nullable',
    //         'detail' => 'nullable',
    //         'price' => 'nullable',
    //         'image' => 'nullable',
    //         'Amount' => 'nullable',
    //     ]);

    //     Products::updated($request->all());

    //     return redirect()->route('adminpage.stock.floral-tone.adminfloraltone');
    // }
}
