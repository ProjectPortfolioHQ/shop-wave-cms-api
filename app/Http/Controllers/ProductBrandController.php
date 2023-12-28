<?php

namespace App\Http\Controllers;

use App\Models\ProductBrand;

class ProductBrandController extends Controller
{
    public function index()
    {
        return response()->json(ProductBrand::select('name', 'slug')->get());
    }
}
