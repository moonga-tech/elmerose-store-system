<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function welcome() {
        $products = Product::get();

        return view('welcome', [
            "products" => $products,
        ]);
    }
    public function products() {
        $products = Product::get();

        return view('products', [
            "products" => $products,
        ]);
    }
    public function viewProduct($id) {
        $product = Product::findOrFail($id);
        return view('viewProduct', ['product' => $product]);
    }
    /* Update product */
    public function viewUpdateProduct($id) {
        $product = Product::find($id);
        return view('updateProduct', ['product' => $product]);
    }
    public function updateProduct(Request $request,  $id) {
        $product = Product::find($id);
        $product->update($request->all());

        return redirect()->route('products')->with('update', "Product Updated");
    }
    /* Delete product */
    public function deleteProduct($id) {
        $product = Product::find($id);
        $product->delete();

        return redirect()->route('products')->with('delete', "Product Deleted Successfully");
    }
    
    public function dashboard() {
        return view('dashboard');
    }
    public function create() {
        return view('create');
    }
    public function store(Request $request) {
        
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|nullable',
            'quantity' => 'required|numeric',
            'price' => 'required|numeric',
        ]);

        $product = new Product();
        $product->name = $validatedData['name'];
        $product->description = $validatedData['description'];
        $product->quantity = $validatedData['quantity'];
        $product->price = $validatedData['price'];

        $product->save();

        /* return redirect()->route('products.index')->with('success', 'Product created successfully!'); */
  
        return Redirect::to('products')->with('created', 'Product Stored');
    }
    public function stock() {
        $products = Product::all();

        foreach ($products as $product) {
        }

        return view('stock', compact('products'));
    }
}