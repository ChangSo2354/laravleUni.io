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

    public function show() {
        $customers = Customer::all();
        return view('customer', compact('customers'));
    }

   public function update(Request $request, $id)
{
    $customer = Customer::findOrFail($id);
    $customer->update($request->only(['name', 'address', 'phone', 'email']));
    return redirect()->back()->with('success', 'Customer updated.');
}

public function destroy($id)
{
    Customer::findOrFail($id)->delete();
    return redirect()->back()->with('success', 'Customer deleted.');
}
}
