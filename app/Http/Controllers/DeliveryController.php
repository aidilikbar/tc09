<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $deliveries = Delivery::all();
        return view('deliveries.index', compact('deliveries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('deliveries.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'tcid' => 'required',
            'dcid' => 'required',
            'spid' => 'required',
            'pallet' => 'required|numeric',
            'fee' => 'required|numeric',
            'delivery_status' => 'required',
        ]);
        Delivery::create($request->all());
        return redirect()->route('deliveries.index')->with('success', 'Delivery created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Delivery $delivery)
    {
        return view('deliveries.show', compact('delivery'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Delivery $delivery)
    {
        return view('deliveries.edit', compact('delivery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Delivery $delivery)
    {
        $request->validate([
            'tcid' => 'required',
            'dcid' => 'required',
            'spid' => 'required',
            'pallet' => 'required|numeric',
            'fee' => 'required|numeric',
            'delivery_status' => 'required',
        ]);
        $delivery->update($request->all());
        return redirect()->route('deliveries.index')->with('success', 'Delivery updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Delivery $delivery)
    {
        $delivery->delete();
        return redirect()->route('deliveries.index')->with('success', 'Delivery deleted successfully.');
    }
}
