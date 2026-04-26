<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function create(Request $request) {

        $data = $request->only([
            'pcode',
            'pname',
            'price',
            'desc',
            'image'
        ]);

        $products = Product::create($data);

        return redirect()->back();
    }
    public function show() {
        $products = Product::all();
        return view('showproduct', compact('products'));
    }
}

