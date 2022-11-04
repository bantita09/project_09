<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class NuttyToneController extends Controller
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

        $nutty = Products::where('id_type_product', 4)->get();

        return view('adminpage.stock.nutty-tone.adminnuttytone', compact('nutty'));

        // $read = Products::all();

        // return view('adminpage.stock.nutty-tone.adminnuttytone', compact('read'));

    }

    public function formadd()
    {
        //C1->Form
        return view('adminpage.stock.nutty-tone.add');
    }

    public function add(Request $request)
    {
        $nutty = new Products();
        $nutty->name = $request->name;
        $nutty->detail = $request->detail;
        $nutty->price = $request->price;
        $nutty->Amount = $request->amount;
        $nutty->id_type_product = 4;
        // $nutty->id_type_product = $request->type_product;

        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/upload/nuttyproduct/', $filename);
            Image::make(public_path() . '/admin/upload/nuttyproduct/' . $filename);
            $nutty->image = $filename;
        }else {
            $nutty->image = 'nopic.png';
        }
        $nutty->save();
        toast('Save Successfully', 'success');

        return redirect()->route('adminpage.stock.nutty-tone.adminnuttytone');

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
        $nutty = Products::find($id);

        if ($nutty->image != 'nopic.png') {
            File::delete(public_path() . '/admin/upload/nuttyproduct/' . $nutty->image);
        }
        $nutty->forcedelete();
        toast('Delete Successfully', 'success');

        return redirect()->route('adminpage.stock.nutty-tone.adminnuttytone');
    }

    public function edit($id)
    {
        return view('adminpage.stock.nutty-tone.edit')->with('nutty', Products::find($id));
    }

    public function update(Request $request, $id)
    {

        if ($request->hasFile('image'))
        {

            $nutty = Products::find($id);
            $nutty->name = $request->name;
            $nutty->detail = $request->detail;
            $nutty->price = $request->price;
            $nutty->image = $request->image;
            $nutty->Amount = $request->amount;
            // $nutty->id_type_product = $request->type_product;

            if ($nutty->image != 'nopic.png') {
                File::delete(public_path() . '/admin/upload/nuttyproduct/' . $nutty->image);
            }

            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/upload/nuttyproduct/', $filename);
            Image::make(public_path() . '/admin/upload/nuttyproduct/' . $filename);
            $nutty->image = $filename;
        }

        $nutty = Products::find($id);
        $nutty->name = $request->name;
        $nutty->detail = $request->detail;
        $nutty->price = $request->price;
        $nutty->Amount = $request->amount;
        // $nutty->id_type_product = $request->type_product;
        $nutty->save();

        toast('Update Successfully', 'success');

        return redirect()->route('adminpage.stock.nutty-tone.adminnuttytone');

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
