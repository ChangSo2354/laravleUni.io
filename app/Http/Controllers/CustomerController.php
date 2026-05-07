<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    //
    public function store(Request $request) {
        $data = $request->only([
            'name',
            'address',
            'phone',
            'email',
        ]);
        Customer::create($data);
        return redirect()->back();
    }
}
