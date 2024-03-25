<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.index');
    }

    public function store(Request $request)
    {
         // Validate incoming request
         $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|string',
        ]);
        // dd($request);
        //Create a new product
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();

        // Redirect back with success message
        return redirect('/index');
    }

    public function edit($id)
    {
        $products1 = Product::all();
        $productone = Product::findOrFail($id);
        return view('products.create', compact('productone','products1'));
    }

    public function update(Request $request, $id)
    {
        // Validate incoming request
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

    // Tìm sản phẩm cần cập nhật dựa trên id
        $product = Product::findOrFail($id);

    // Cập nhật thông tin của sản phẩm
        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

    
        return redirect('/index');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/index');
    }
}
