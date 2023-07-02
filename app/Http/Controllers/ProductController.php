<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'productname' => 'required|string',
            'productprice' => 'required|numeric',
            'productcategory' => 'required|string',
            'productdescription' => 'required|string',
        ]);

        // Create a new product instance with the validated data
        $product = new Product();
        $product->name = $validatedData['productname'];
        $product->price = $validatedData['productprice'];
        $product->category = $validatedData['productcategory'];
        $product->description = $validatedData['productdescription'];

        // Save the product in the database
        $product->save();

        // Redirect or return a response
        // For example, you can redirect back to the previous page
        return back()->with('success', 'Product added successfully!');
    }
}
