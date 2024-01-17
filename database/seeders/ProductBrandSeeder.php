<?php

namespace Database\Seeders;

use App\Models\ProductBrand;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductBrandSeeder extends Seeder
{
    private const BRANDS = [
        'samsung',
        'oppo',
        'xiaomi',
        'vivo',
        'realme',
        'nokia',
        'masstel',
        'mobell',
        'itel',
        'apple',
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        foreach (self::BRANDS as $brand) {
            ProductBrand::create([
                'name' => $brand,
                'slug' => Str::slug($brand),
            ]);
        }
    }
}
