<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $products = Product::all();
       return view('backend.product.allProduct', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend/product/addProduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_code' => 'required',
            'product_name' => 'required',
            'product_desc' => 'required',
            'cost_price' => 'required',
            'sale_price' => 'required',
            'quantity' => 'required',

        ]);

        $product = new Product;

        $product->product_code = $request->product_code;
        $product->product_name = $request->product_name;
        $product->product_desc = $request->product_desc;
        $product->cost_price = $request->cost_price;
        $product->sale_price = $request->sale_price;
        $product->quantity = $request->quantity;
        $product->status = '1';
        $product->save();
        return redirect()->Route('all.product')->with('message', 'Product Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->Route('all.product')->with('message', 'Product Delete Successfully');
    }
}
