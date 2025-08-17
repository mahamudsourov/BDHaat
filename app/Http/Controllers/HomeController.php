<?php

namespace App\Http\Controllers;

use App\Models\Cloth;
use App\Models\Food;
use App\Models\HealthyFood;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch latest 3 from each category
        $clothes = Cloth::latest()->take(3)->get();
        $foods = Food::latest()->take(3)->get();
        $healthyFoods = HealthyFood::latest()->take(3)->get();

        // Merge them into one collection for New Arrivals
        $newArrivals = collect()
            ->merge($clothes)
            ->merge($foods)
            ->merge($healthyFoods)
            ->sortByDesc('created_at')
            ->take(8);

        // Trending: Merge all & sort by price
        $trending = collect()
            ->merge($clothes)
            ->merge($foods)
            ->merge($healthyFoods)
            ->sortByDesc('price')
            ->take(8); // Top 8 most expensive

        return view('home', compact('newArrivals', 'trending'));
    }
}
