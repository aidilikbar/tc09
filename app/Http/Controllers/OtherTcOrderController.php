<?php

namespace App\Http\Controllers;

use App\Models\OtherTcOrder;
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
        return view('other_tc_orders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'othertcorderid' => 'required',
            'other_tc_id' => 'required',
            'dcid' => 'required',
            'spid' => 'required',
            'bidfee' => 'required|numeric',
            'status' => 'required',
        ]);
        Order::create($request->all());
        return redirect()->route('other-tc-orders.index')->with('success', 'Other TC Order created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(OtherTcOrder $otherTcOrder)
    {
        return view('other_tc_orders.show', compact('order'));
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
