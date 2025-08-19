<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Models\Cloth;
use App\Models\Food;
use App\Models\HealthyFood;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = trim((string) $request->input('query'));

        if (strlen($query) < 2) {
            return view('admin.search.search', [
                'results' => collect(),
                'query'   => $query,
                'message' => 'Please enter at least 2 characters to search.'
            ]);
        }

        // ---- Cloths
        $cloths = Cloth::query()
            ->where('status', 'active')
            ->where('quantity', '>', 0)
            ->where(function ($q) use ($query) {
                $q->where('name', 'LIKE', "%{$query}%")
                  ->orWhere('brand', 'LIKE', "%{$query}%")
                  ->orWhere('color', 'LIKE', "%{$query}%")
                  ->orWhere('size', 'LIKE', "%{$query}%");
            })
            ->get()
            ->map(function ($item) {
                return [
                    'id'     => $item->id,
                    'type'   => 'cloth',
                    'name'   => $item->name,
                    'brand'  => $item->brand,
                    'size'   => $item->size,
                    'color'  => $item->color,
                    'price'  => (float) $item->price,
                    'image'  => $item->image,
                    'url'    => '/product-details', // Point to product details page
                ];
            });

        // ---- Food
        $foods = Food::query()
            ->where(function ($q) use ($query) {
                $q->where('name', 'LIKE', "%{$query}%")
                  ->orWhere('description', 'LIKE', "%{$query}%");
            })
            ->get()
            ->map(function ($item) {
                return [
                    'id'     => $item->id,
                    'type'   => 'food',
                    'name'   => $item->name,
                    'brand'  => null,
                    'size'   => null,
                    'color'  => null,
                    'price'  => (float) $item->price,
                    'image'  => $item->image,
                    'url'    => '/product-details', // Point to product details page
                ];
            });

        // ---- Healthy Foods
        $healthyFoods = HealthyFood::query()
            ->where(function ($q) use ($query) {
                $q->where('name', 'LIKE', "%{$query}%")
                  ->orWhere('brand', 'LIKE', "%{$query}%");
            })
            ->get()
            ->map(function ($item) {
                return [
                    'id'     => $item->id,
                    'type'   => 'healthy_food',
                    'name'   => $item->name,
                    'brand'  => $item->brand,
                    'size'   => null,
                    'color'  => null,
                    'price'  => (float) $item->price,
                    'image'  => $item->image,
                    'url'    => '/product-details', // Point to product details page
                ];
            });

        // Merge + sort
        $merged = $cloths->concat($foods)->concat($healthyFoods);
        $sorted = $merged->sortBy('name', SORT_NATURAL | SORT_FLAG_CASE)->values();

        // Paginate
        $perPage = 12;
        $page    = LengthAwarePaginator::resolveCurrentPage();
        $pageItems = $sorted->slice(($page - 1) * $perPage, $perPage)->values();
        $paginator = new LengthAwarePaginator(
            $pageItems,
            $sorted->count(),
            $perPage,
            $page,
            ['path' => $request->url(), 'query' => $request->query()]
        );

        return view('admin.search.search', [
            'results' => $paginator,
            'query'   => $query,
            'message' => $sorted->isEmpty() ? "No products found for: {$query}" : null,
        ]);
    }

    public function suggest(Request $request)
    {
        $q = trim((string) $request->input('q'));
        if (strlen($q) < 2) return response()->json([]);

        $take = 5;

        // Cloth suggestions
        $cloths = Cloth::where('status', 'active')
            ->where('quantity', '>', 0)
            ->where(function ($w) use ($q) {
                $w->where('name', 'LIKE', "%{$q}%")
                  ->orWhere('brand', 'LIKE', "%{$q}%");
            })->limit($take)->get(['id','name','price','image'])
            ->map(fn($i) => [
                'id' => $i->id, 'type' => 'cloth', 'name' => $i->name,
                'price' => (float) $i->price,
                'image' => $i->image,
                'url' => '/product-details',
            ]);

        // Food suggestions
        $foods = Food::where(function ($w) use ($q) {
                $w->where('name', 'LIKE', "%{$q}%")
                  ->orWhere('description', 'LIKE', "%{$q}%");
            })->limit($take)->get(['id','name','price','image'])
            ->map(fn($i) => [
                'id' => $i->id, 'type' => 'food', 'name' => $i->name,
                'price' => (float) $i->price,
                'image' => $i->image,
                'url' => '/product-details',
            ]);

        // Healthy Food suggestions
        $healthy = HealthyFood::where(function ($w) use ($q) {
                $w->where('name', 'LIKE', "%{$q}%")
                  ->orWhere('brand', 'LIKE', "%{$q}%");
            })->limit($take)->get(['id','name','price','image'])
            ->map(fn($i) => [
                'id' => $i->id, 'type' => 'healthy_food', 'name' => $i->name,
                'price' => (float) $i->price,
                'image' => $i->image,
                'url' => '/product-details',
            ]);

        // Merge & take top 10
        $out = $cloths->concat($foods)->concat($healthy)->take(10)->values();

        return response()->json($out);
    }
}
