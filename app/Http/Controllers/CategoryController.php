<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    // Show all categories
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    // Show the form to add a new category
    public function create()
    {
        return view('categories.create');
    }

    // Store a new category
    public function store(Request $request)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
            'category_description' => 'nullable|string',
        ]);

        Category::create([
            'category_name' => $request->category_name,
            'category_description' => $request->category_description,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category added successfully!');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('categories.edit-category', compact('category'));  // Make sure this points to the correct view
    }


    // Update the category
    public function update(Request $request, $id)
    {
        $request->validate([
            'category_name' => 'required|string|max:255',
            'category_description' => 'nullable|string',
        ]);

        $category = Category::findOrFail($id);
        $category->update([
            'category_name' => $request->category_name,
            'category_description' => $request->category_description,
        ]);

        return redirect()->route('categories.index')->with('success', 'Category updated successfully!');
    }

    // Delete a category
    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->route('categories.index')->with('success', 'Category deleted successfully!');
    }
}
