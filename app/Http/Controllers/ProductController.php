<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Show the form to create a new product
    public function create()
    {
        $categories = Category::all(); // Fetch all categories
        return view('product.add-product', compact('categories'));
    }

    // Store a new product
    public function store(Request $request)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'category_id' => 'required|exists:tbl_category,category_id',
            'price' => 'required|numeric',
            'product_description' => 'required|string',
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = new Product($request->all());

        if ($request->hasFile('product_image')) {
            $imagePath = $request->file('product_image')->store('images/products', 'public');
            $product->product_image = $imagePath;
        }

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product added successfully!');
    }

    // Display the list of products
    public function index()
    {
        $products = Product::all(); // Fetch all products
        return view('product.list', compact('products')); // Pass products to the view
    }

    // Show the form to edit a product
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('product.edit-product', compact('product', 'categories'));
    }

    // Update a product
    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'category_id' => 'required|exists:tbl_category,category_id',
            'price' => 'required|numeric',
            'product_description' => 'required|string',
            'product_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $product = Product::findOrFail($id);
        $product->fill($request->all());

        if ($request->hasFile('product_image')) {
            $imagePath = $request->file('product_image')->store('images/products', 'public');
            $product->product_image = $imagePath;
        }

        $product->save();

        return redirect()->route('products.index')->with('success', 'Product updated successfully!');
    }

    // Delete a product
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Product deleted successfully!');
    }

    // Display the shop page with optional category filtering
    public function shop(Request $request)
    {
        // Fetch all categories from the database
        $categories = Category::all();

        // Check if a category is selected
        if ($request->has('category') && $request->input('category') != 'all') {
            // Fetch products that belong to the selected category
            $products = Product::whereHas('category', function ($query) use ($request) {
                $query->where('category_name', $request->input('category'));
            })->get();
        } else {
            // Fetch all products if no category is selected
            $products = Product::all();
        }

        // Pass products and categories to the shop view
        return view('shop', compact('products', 'categories'));
    }
}
