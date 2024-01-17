<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductIndexController extends Controller
{
    public function __invoke(Request $request)
    {
        $productQuery = Product::query();
        if ($request->has('brands')) {
            $brands = explode(',', $request->query('brands'));
            $productQuery->whereHas('brand', function ($query) use ($brands) {
                return $query->whereIn('name', $brands);
            });
        }
        $products = $productQuery->orderBy('created_at', 'desc')->paginate(20);

        return response()->json($products);
    }
}
