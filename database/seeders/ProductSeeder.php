<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductBrand;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = ProductBrand::all();
        foreach ($brands as $brand) {
            $products = Product::factory()->count(10_000)->make([
                'brand_id' => $brand->id,
            ]);
            $products->chunk(1_000)->each(function ($chunk) {
                Product::insert($chunk->toArray());
            });
        }
    }
}
