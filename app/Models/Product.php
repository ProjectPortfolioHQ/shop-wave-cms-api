<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'thumbnail',
        'brand_id',
    ];

    // public $timestamps = false; Uncomment this when run seeder to have created_at and updated_at

    public function brand()
    {
        return $this->belongsTo(ProductBrand::class);
    }
}
