<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class WineyToneController extends Controller
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

        $winey = Products::where('id_type_product', 5)->get();

        return view('adminpage.stock.winey-tone.adminwineytone', compact('winey'));

        // $read = Products::all();

        // return view('adminpage.stock.winey-tone.adminwineytone', compact('read'));


    }

    public function formadd()
    {
        //C1->Form
        return view('adminpage.stock.winey-tone.add');
    }

    public function add(Request $request)
    {
        $winey = new Products();
        $winey->name = $request->name;
        $winey->detail = $request->detail;
        $winey->price = $request->price;
        $winey->Amount = $request->amount;
        $winey->id_type_product = 5;
        // $winey->id_type_product = $request->type_product;

        if ($request->hasFile('image')) {
            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/upload/wineyproduct/', $filename);
            Image::make(public_path() . '/admin/upload/wineyproduct/' . $filename);
            $winey->image = $filename;
        }else {
            $winey->image = 'nopic.png';
        }

        $winey->save();

        toast('Save Successfully', 'success');

        return redirect()->route('adminpage.stock.winey-tone.adminwineytone');

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
        $winey = Products::find($id);

        if ($winey->image != 'nopic.png') {
            File::delete(public_path() . '/admin/upload/wineyproduct/' . $winey->image);
        }
        $winey->forcedelete();
        toast('Delete Successfully', 'success');

        return redirect()->route('adminpage.stock.winey-tone.adminwineytone');
    }

    public function edit($id)
    {
        return view('adminpage.stock.winey-tone.edit')->with('winey', Products::find($id));
    }

    public function update(Request $request, $id)
    {

        if ($request->hasFile('image'))
        {

            $winey = Products::find($id);
            $winey->name = $request->name;
            $winey->detail = $request->detail;
            $winey->price = $request->price;
            $winey->image = $request->image;
            $winey->Amount = $request->amount;
            // $winey->id_type_product = $request->type_product;

            if ($winey->image != 'nopic.png')
            {
                File::delete(public_path() . '/admin/upload/wineyproduct/' . $winey->image);
            }

            $filename = Str::random(10) . '.' . $request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path() . '/admin/upload/wineyproduct/', $filename);
            Image::make(public_path() . '/admin/upload/wineyproduct/' . $filename);
            $winey->image = $filename;

        }

        $winey = Products::find($id);
        $winey->name = $request->name;
        $winey->detail = $request->detail;
        $winey->price = $request->price;
        $winey->Amount = $request->amount;
        // $winey->id_type_product = $request->type_product;
        $winey->save();

        toast('Update Successfully', 'success');

        return redirect()->route('adminpage.stock.winey-tone.adminwineytone');

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
