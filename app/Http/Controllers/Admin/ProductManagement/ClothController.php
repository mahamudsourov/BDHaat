<?php

namespace App\Http\Controllers\Admin\ProductManagement;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cloth;
use Illuminate\Support\Facades\Storage;

class ClothController extends Controller
{
    public function index()
    {
        $clothes = Cloth::orderBy('created_at', 'desc')->paginate(12);
        return view('admin.clothes.index', compact('clothes'));
    }

    public function create()
    {
        return view('admin.clothes.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'brand' => 'nullable|string|max:255',
            'name'  => 'required|string|max:255',
            'size'  => 'nullable|string|max:50',
            'color' => 'nullable|string|max:50',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'quantity' => 'nullable|integer|min:0',
            'status' => 'required|in:active,inactive',
        ]);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('cloths', 'public');
        }

        Cloth::create($data);

        return redirect()->route('admin.cloths.index')->with('success', 'Cloth added successfully.');
    }

    public function show(Cloth $cloth)
    {
        return view('admin.clothes.show', compact('cloth'));
    }

    public function edit(Cloth $cloth)
    {
        return view('admin.clothes.edit', ['clothing' => $cloth]);
    }

    public function update(Request $request, Cloth $cloth)
    {
        $data = $request->validate([
            'brand' => 'nullable|string|max:255',
            'name'  => 'required|string|max:255',
            'size'  => 'nullable|string|max:50',
            'color' => 'nullable|string|max:50',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:5120',
            'quantity' => 'nullable|integer|min:0',
            'status' => 'required|in:active,inactive',
        ]);

        if ($request->hasFile('image')) {
            // Delete old file if exists
            if ($cloth->image && Storage::disk('public')->exists($cloth->image)) {
                Storage::disk('public')->delete($cloth->image);
            }
            $data['image'] = $request->file('image')->store('cloths', 'public');
        }

        $cloth->update($data);

        return redirect()->route('admin.cloths.index')->with('success', 'Cloth updated successfully.');
    }

    public function destroy(Cloth $cloth)
    {
        if ($cloth->image && Storage::disk('public')->exists($cloth->image)) {
            Storage::disk('public')->delete($cloth->image);
        }

        $cloth->delete();

        return redirect()->route('admin.cloths.index')->with('success', 'Cloth deleted successfully.');
    }
}
