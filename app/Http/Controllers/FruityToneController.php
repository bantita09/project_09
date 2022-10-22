<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class FruityToneController extends Controller
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
        $fruity = Products::all();

        return view('adminpage.stock.fruity-tone.adminfruitytone', compact('fruity'));

        // $read = Products::all();

        // return view('adminpage.stock.fruity-tone.adminfruitytone', compact('read'));
    }

    public function formadd()
    {
        //C1->Form
        return view('adminpage.stock.fruity-tone.add');
    }

    public function add(Request $request)
    {
        $fruity = new Products();
        $fruity->name = $request->name;
        $fruity->detail = $request->detail;
        $fruity->price = $request->price;
        $fruity->Amount = $request->amount;
        $fruity->id_type_product = $request->type_product;

        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/upload/fruityproduct/', $filename);
            Image::make(public_path() . '/admin/upload/fruityproduct/' . $filename);
            $fruity->image = $filename;
        }else {
            $fruity->image = 'nopic.png';
        }
        $fruity->save();
        toast('Save Successfully', 'success');

        return redirect()->route('adminpage.stock.fruity-tone.adminfruitytone');

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
        $fruity = Products::find($id);

        if ($fruity->image != 'nopic.png') {
            File::delete(public_path() . '/admin/upload/fruityproduct/' . $fruity->image);
        }
        $fruity->delete();
        toast('Delete Successfully', 'success');

        return redirect()->route('adminpage.stock.fruity-tone.adminfruitytone');
    }

    public function edit($id)
    {
        return view('adminpage.stock.fruity-tone.edit')->with('fruity', Products::find($id));
    }

    public function update(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $fruity = Products::find($id);
            $fruity->name = $request->name;
            $fruity->detail = $request->detail;
            $fruity->price = $request->price;
            $fruity->image = $request->image;
            $fruity->Amount = $request->amount;
            $fruity->id_type_product = $request->type_product;

            if ($fruity->image != 'nopic.png') {
                File::delete(public_path() . '/admin/upload/fruityproduct/' . $fruity->image);
            }

            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/upload/fruityproduct/', $filename);
            Image::make(public_path() . '/admin/upload/fruityproduct/' . $filename);
            $fruity->image = $filename;
        }
        $fruity = Products::find($id);
        $fruity->name = $request->name;
        $fruity->detail = $request->detail;
        $fruity->price = $request->price;
        $fruity->Amount = $request->amount;
        $fruity->id_type_product = $request->type_product;
        $fruity->save();
        toast('Update Successfully', 'success');

        return redirect()->route('adminpage.stock.fruity-tone.adminfruitytone');
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
