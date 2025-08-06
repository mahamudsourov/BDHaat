<?php

namespace App\Http\Controllers\Admin\ProductManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HealthyFood;

class HealthyFoodController extends Controller
{
    public function create()
    {
        return view('admin.healthyfoods.create');
    }

    public function index()
{
    $foods = HealthyFood::all();
    return view('admin.healthyfoods.index', compact('foods'));
}


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
