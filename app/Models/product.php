<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class product extends Model
{
    protected $casts = [
        'tags' => 'array',
        'size' => 'array',
        'color' => 'array',
    ];
    protected $fillable = [
        'brand_id',
        'category_id',
        'subcategory_id', // Ensure this matches the column name in the database
        'name',
        'slug',
        'code',
        'qty',
        'tags',
        'size',
        'color',
        'selling_price',
        'discount_price',
        'short_descp',
        'long_descp',
        'thambnail',
        'vendor_id',
        'featured',
        'special_offer',
        'special_deals',
        'status',
    ];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            $model->slug = Str::slug($model->name);
        });
    }
    public function photos()
{
    return $this->hasMany(ProductPhoto::class);
}
}
