<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

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
        $floral = Products::all();

        return view('adminpage.stock.floral-tone.adminfloraltone', compact('floral'));

        // $read = Products::all();

        // return view('adminpage.stock.floral-tone.adminfloraltone', compact('read'));
    }

    public function formadd()
    {
        //C1->Form
        return view('adminpage.stock.floral-tone.add');
    }

    public function add(Request $request)
    {
        $floral = new Products();
        $floral->name = $request->name;
        $floral->detail = $request->detail;
        $floral->price = $request->price;
        $floral->Amount = $request->amount;
        $floral->id_type_product = $request->type_product;

        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/upload/floralproduct/', $filename);
            Image::make(public_path() . '/admin/upload/floralproduct/' . $filename);
            $floral->image = $filename;
        }else {
            $floral->image = 'nopic.png';
        }
        $floral->save();
        toast('Save Successfully', 'success');

        return redirect()->route('adminpage.stock.floral-tone.adminfloraltone');

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
        $floral = Products::find($id);

        if ($floral->image != 'nopic.png') {
            File::delete(public_path() . '/admin/upload/floralproduct/' . $floral->image);
        }
        $floral->forcedelete();
        toast('Delete Successfully', 'success');

        return redirect()->route('adminpage.stock.floral-tone.adminfloraltone');
    }

    public function edit($id)
    {
        return view('adminpage.stock.floral-tone.edit')->with('floral', Products::find($id));
    }

    public function update(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $floral = Products::find($id);
            $floral->name = $request->name;
            $floral->detail = $request->detail;
            $floral->price = $request->price;
            $floral->image = $request->image;
            $floral->Amount = $request->amount;
            $floral->id_type_product = $request->type_product;

            if ($floral->image != 'nopic.png') {
                File::delete(public_path() . '/admin/upload/floralproduct/' . $floral->image);
            }

            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/upload/floralproduct/', $filename);
            Image::make(public_path() . '/admin/upload/floralproduct/' . $filename);
            $floral->image = $filename;
        }
        $floral = Products::find($id);
        $floral->name = $request->name;
        $floral->detail = $request->detail;
        $floral->price = $request->price;
        $floral->Amount = $request->amount;
        $floral->id_type_product = $request->type_product;
        $floral->save();
        toast('Update Successfully', 'success');

        return redirect()->route('adminpage.stock.floral-tone.adminfloraltone');
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
