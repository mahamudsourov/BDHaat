<?php

namespace App\Http\Controllers\Admin\ProductManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HealthyFood;

class HealthyFoodController extends Controller
{
    // Show form to create new healthy food product
    public function create()
    {
        return view('admin.healthyfoods.create');
    }

    // Admin listing page for healthy foods
    public function index()
    {
        $foods = HealthyFood::all();
        return view('admin.healthyfoods.index', compact('foods'));
    }

    // Public facing healthy foods page
    public function publicIndex()
    {
        $healthyFoods = HealthyFood::all();
        return view('healthy_food', compact('healthyFoods'));
    }

    // Show edit form for a single healthy food product
    public function edit($id)
    {
        $food = HealthyFood::findOrFail($id);
        return view('admin.healthyfoods.edit', compact('food'));
    }

    // Update the product in database
    public function update(Request $request, $id)
    {
        $food = HealthyFood::findOrFail($id);

        $request->validate([
            'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048',
            'brand' => 'required|string',
            'name' => 'required|string',
            'price' => 'required|numeric'
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
            $food->image = $path;
        }

        $food->brand = $request->brand;
        $food->name = $request->name;
        $food->price = $request->price;
        $food->save();

        return redirect()->route('admin.healthyfoods.index')->with('success', 'Product updated successfully!');
    }

    // Delete a product
    public function destroy($id)
    {
        $food = HealthyFood::findOrFail($id);
        $food->delete();

        return redirect()->route('admin.healthyfoods.index')->with('success', 'Product deleted successfully!');
    }

    // Store a new product in database
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,jpg,png|max:2048',
            'brand' => 'required|string',
            'name' => 'required|string',
            'price' => 'required|numeric'
        ]);

        $path = $request->file('image')->store('products', 'public');

        HealthyFood::create([
            'image' => $path,
            'brand' => $request->brand,
            'name' => $request->name,
            'price' => $request->price
        ]);

        return redirect()->back()->with('success', 'Product added successfully!');
    }
}
