<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Products;

class HouseBlend extends Controller
{

    public function index()
    {

        $products = Products::where('id_type_product', 1)->get();
        return view('promotepage.house-blend', compact('products'));

    }

}
