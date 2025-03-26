<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('inventory.index', compact('products'));
    }

    public function updateQuantity(Request $request, $id)
    {
        $product = Product::find($id);
        $product->quantity = $request->input('quantity');
        $product->save();
        return redirect()->route('inventory.index');
    }

}
