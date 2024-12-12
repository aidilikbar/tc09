<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Actor;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::with('product')->get(); // Include related product details
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Fetch actors with roles DC and SP
        $dcActors = Actor::where('roles', 'dc')->get();
        $spActors = Actor::where('roles', 'sp')->get();
        $products = Product::all(['sku', 'product_name']);

        return view('orders.create', compact('dcActors', 'spActors', 'products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'orderid' => 'required|unique:orders',
            'customer' => 'required',
            'dcid' => 'required',
            'spid' => 'required',
            'tcid' => 'required',
            'sku' => 'required|exists:products,sku',
            'quantity' => 'required|integer|min:1',
            'order_status' => 'required',
            'order_fee' => 'nullable|numeric',
        ]);
        Order::create($request->all());
        return redirect()->route('orders.index')->with('success', 'Order created successfully.');

        /*
        $order = Order::create($request->only([
            'orderid',
            'customer',
            'dcid',
            'spid',
            'tcid',
            'order_status',
            'order_fee',
        ]));
    
        // Sync products with quantities
        $productData = [];
        foreach ($request->products as $index => $productId) {
            $productData[$productId] = ['quantity' => $request->quantities[$index]];
        }
        $order->products()->sync($productData);
    
        return redirect()->route('orders.index')->with('success', 'Order created successfully.');
        */
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        $product = Product::where('sku', $order->sku)->first();
        return view('orders.show', compact('order', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        // Fetch actors with roles DC and SP
        $dcActors = Actor::where('roles', 'dc')->get();
        $spActors = Actor::where('roles', 'sp')->get();
        $products = Product::all(['sku', 'product_name']);

        return view('orders.edit', compact('order', 'dcActors', 'spActors', 'products'));
        
        //return view('orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $request->validate([
            'orderid' => 'required|unique:orders,orderid,' . $order->id,
            'customer' => 'required',
            'dcid' => 'required',
            'spid' => 'required',
            'tcid' => 'required',
            'sku' => 'required|exists:products,sku',
            'quantity' => 'required|integer|min:1',
            'order_status' => 'required',
            'order_fee' => 'nullable|numeric',
        ]);
        $order->update($request->all());
        return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
        /*
        // Sync products with quantities
        $productData = [];
        foreach ($request->products as $index => $productId) {
            $productData[$productId] = ['quantity' => $request->quantities[$index]];
        }
        $order->products()->sync($productData);

        return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
        */
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
    }
}
