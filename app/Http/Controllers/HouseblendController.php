<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class HouseblendController extends Controller
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
        $houseblend = Products::all();

        return view('adminpage.stock.house-blend.adminhouseblend', compact('houseblend'));

        // $read = Products::all();

        // return view('adminpage.stock.house-blend.adminhouseblend', compact('read'));
    }

    public function formadd()
    {
        //C1->Form
        return view('adminpage.stock.house-blend.add');
    }

    public function add(Request $request)
    {
        $houseblend = new Products();
        $houseblend->name = $request->name;
        $houseblend->detail = $request->detail;
        $houseblend->price = $request->price;
        $houseblend->Amount = $request->amount;
        $houseblend->id_type_product = $request->type_product;

        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/upload/hbproduct/', $filename);
            Image::make(public_path() . '/admin/upload/hbproduct/' . $filename);
            $houseblend->image = $filename;
        }else {
            $houseblend->image = 'nopic.png';
        }
        $houseblend->save();
        toast('Save Successfully', 'success');

        return redirect()->route('adminpage.stock.house-blend.adminhouseblend');

        // C2->Create
        // $request->validate([
        //     'name' => 'nullable',
        //     'detail' => 'nullable',
        //     'price' => 'nullable',
        //     'image' => 'nullable',
        //     'Amount' => 'nullable',
        // ]);

        // Products::create($request->all());

        // return redirect()->route('adminpage.stock.house-blend.adminhouseblend');
    }

    public function delete($id)
    {
        $houseblend = Products::find($id);

        if ($houseblend->image != 'nopic.png') {
            File::delete(public_path() . '/admin/upload/hbproduct/' . $houseblend->image);
        }
        $houseblend->delete();
        toast('Delete Successfully', 'success');

        return redirect()->route('adminpage.stock.house-blend.adminhouseblend');
    }

    public function edit($id)
    {
        return view('adminpage.stock.house-blend.edit')->with('houseblend', Products::find($id));
    }

    public function update(Request $request, $id)
    {
        if ($request->hasFile('image')) {
            $houseblend = Products::find($id);
            $houseblend->name = $request->name;
            $houseblend->detail = $request->detail;
            $houseblend->price = $request->price;
            $houseblend->image = $request->image;
            $houseblend->Amount = $request->amount;
            $houseblend->id_type_product = $request->type_product;

            if ($houseblend->image != 'nopic.png') {
                File::delete(public_path() . '/admin/upload/hbproduct/' . $houseblend->image);
            }

            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/upload/hbproduct/', $filename);
            Image::make(public_path() . '/admin/upload/hbproduct/' . $filename);
            $houseblend->image = $filename;
        }
        $houseblend = Products::find($id);
        $houseblend->name = $request->name;
        $houseblend->detail = $request->detail;
        $houseblend->price = $request->price;
        $houseblend->Amount = $request->amount;
        $houseblend->id_type_product = $request->type_product;
        $houseblend->save();
        toast('Update Successfully', 'success');

        return redirect()->route('adminpage.stock.house-blend.adminhouseblend');
    }

    // public function formedit()
    // {
    //     //U1->Form
    //     return view('adminpage.stock.house-blend.edit');
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

    //     return redirect()->route('adminpage.stock.house-blend.adminhouseblend');
    // }
}
