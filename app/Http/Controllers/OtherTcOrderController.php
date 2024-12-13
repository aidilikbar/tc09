<?php

namespace App\Http\Controllers;

use App\Models\OtherTcOrder;
use App\Models\Actor;
use App\Models\Product;
use Illuminate\Http\Request;

class OtherTcOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $otherTcOrders = OtherTCOrder::all();
        return view('other_tc_orders.index', compact('otherTcOrders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Fetch actors by roles
        $tcActors = Actor::where('roles', 'tc')->get();
        $dcActors = Actor::where('roles', 'dc')->get();
        $spActors = Actor::where('roles', 'sp')->get();
        $products = Product::all(); // Fetch all products for selection

        return view('other_tc_orders.create', compact('tcActors', 'dcActors', 'spActors', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        // Validate the input data
        $validated = $request->validate([
            'othertcorderid' => 'required|unique:other_tc_orders,othertcorderid',
            'other_tc_id' => 'required',
            'dcid' => 'required',
            'spid' => 'required',
            'sku' => 'required',
            'quantity' => 'required|numeric',
            'bidfee' => 'required|numeric',
            'other_tc_order_status' => 'required',
        ]);
     
        // Debugging: Check the validated data
        dd($validated); // Uncomment this if you want to inspect the validated data before saving
     
        // Create a new OtherTcOrder record
        $otherTcOrder = OtherTcOrder::create($validated);
     
        // Debugging: Check the saved record
        dd($otherTcOrder); // This will show the saved record to ensure it's saved correctly
     
        // Redirect to the index page with a success message
        return redirect()->route('other_tc_orders.index')->with('success', 'Other TC Order created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(OtherTcOrder $otherTcOrder)
    {
        $product = $otherTCOrder->product; // Get the associated product
        return view('other_tc_orders.show', compact('otherTCOrder', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OtherTcOrder $otherTcOrder)
    {
        return view('other_tc_orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OtherTcOrder $otherTcOrder)
    {
        $request->validate([
            'othertcorderid' => 'required',
            'other_tc_id' => 'required',
            'dcid' => 'required',
            'spid' => 'required',
            'bidfee' => 'required|numeric',
            'status' => 'required',
        ]);
        $order->update($request->all());
        return redirect()->route('other-tc-orders.index')->with('success', 'Other TC Order updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OtherTcOrder $otherTcOrder)
    {
        $order->delete();
        return redirect()->route('other-tc-orders.index')->with('success', 'Other TC Order deleted successfully.');
    }
}
