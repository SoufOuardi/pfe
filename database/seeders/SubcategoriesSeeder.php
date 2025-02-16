<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Subcategory;

class SubcategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subcategories = [
            // Appliances
            ['name' => 'Washing Machines', 'category_id' => 4, 'slug' => 'washing-machines'],
            ['name' => 'Refrigerators', 'category_id' => 4, 'slug' => 'refrigerators'],
            ['name' => 'Microwaves', 'category_id' => 4, 'slug' => 'microwaves'],

            // Beauty
            ['name' => 'Skin Care', 'category_id' => 5, 'slug' => 'skin-care'],
            ['name' => 'Hair Care', 'category_id' => 5, 'slug' => 'hair-care'],
            ['name' => 'Makeup', 'category_id' => 5, 'slug' => 'makeup'],

            // Electronics
            ['name' => 'Laptops', 'category_id' => 6, 'slug' => 'laptops'],
            ['name' => 'Mobile Phones', 'category_id' => 6, 'slug' => 'mobile-phones'],
            ['name' => 'Headphones', 'category_id' => 6, 'slug' => 'headphones'],

            // Fashion
            ['name' => 'Men\'s Clothing', 'category_id' => 7, 'slug' => 'mens-clothing'],
            ['name' => 'Women\'s Clothing', 'category_id' => 7, 'slug' => 'womens-clothing'],
            ['name' => 'Footwear', 'category_id' => 7, 'slug' => 'footwear'],

            // Furnitures
            ['name' => 'Living Room Furniture', 'category_id' => 8, 'slug' => 'living-room-furniture'],
            ['name' => 'Bedroom Furniture', 'category_id' => 8, 'slug' => 'bedroom-furniture'],
            ['name' => 'Office Furniture', 'category_id' => 8, 'slug' => 'office-furniture'],

            // Groceries
            ['name' => 'Fruits & Vegetables', 'category_id' => 9, 'slug' => 'fruits-vegetables'],
            ['name' => 'Snacks', 'category_id' => 9, 'slug' => 'snacks'],
            ['name' => 'Beverages', 'category_id' => 9, 'slug' => 'beverages'],

            // Meat & Fish
            ['name' => 'Fresh Meat', 'category_id' => 10, 'slug' => 'fresh-meat'],
            ['name' => 'Frozen Meat', 'category_id' => 10, 'slug' => 'frozen-meat'],
            ['name' => 'Fish', 'category_id' => 10, 'slug' => 'fish'],

            // Mobiles
            ['name' => 'Smartphones', 'category_id' => 11, 'slug' => 'smartphones'],
            ['name' => 'Accessories', 'category_id' => 11, 'slug' => 'accessories'],
            ['name' => 'Tablets', 'category_id' => 11, 'slug' => 'tablets'],

            // Sweet Home
            ['name' => 'Home Decor', 'category_id' => 12, 'slug' => 'home-decor'],
            ['name' => 'Bedding', 'category_id' => 12, 'slug' => 'bedding'],
            ['name' => 'Kitchenware', 'category_id' => 12, 'slug' => 'kitchenware'],

            // Travel
            ['name' => 'Luggage', 'category_id' => 13, 'slug' => 'luggage'],
            ['name' => 'Travel Accessories', 'category_id' => 13, 'slug' => 'travel-accessories'],
            ['name' => 'Camping Gear', 'category_id' => 13, 'slug' => 'camping-gear'],
        ];

        // Insert the subcategories into the database
        foreach ($subcategories as $subcategory) {
            Subcategory::create([
                'name' => $subcategory['name'],
                'category_id' => $subcategory['category_id'],
                'slug' => $subcategory['slug'],
            ]);
        }
    }
}
