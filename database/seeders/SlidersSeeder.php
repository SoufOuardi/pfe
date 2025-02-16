<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Slider;

class SlidersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sliders = [
            [
                'title' => 'Don’t miss amazing<br> grocery deals',
                'image' => 'storage/uploads/sliders/1740458445299745.png',
                'paragraph' => 'Sign up for the daily newsletter Fresh Vegetables<br>Big discount'
            ],
            [
                'title' => 'Save up to 50% off on your first order',
                'image' => 'storage/uploads/sliders/1740458428862987.png',
                'paragraph' => 'Exclusive discounts for new users. Grab the offer now!'
            ]
        ];

        foreach ($sliders as $slider) {
            // Create the slider with title, image, and paragraph
            Slider::create([
                'title' => $slider['title'], // Store the title
                'image' => $slider['image'], // Store the image path
                'paragraph' => $slider['paragraph'], // Store the paragraph
            ]);
        }
    }
}
