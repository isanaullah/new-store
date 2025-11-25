<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Rings',
                'slug' => 'rings',
                'description' => 'Elegant and timeless rings for every occasion. From engagement rings to statement pieces, find your perfect ring.',
                'image' => 'uploads/categories/rings.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Necklaces',
                'slug' => 'necklaces',
                'description' => 'Beautiful necklaces that complement any style. Explore our collection of chains, pendants, and chokers.',
                'image' => 'uploads/categories/necklaces.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Bracelets',
                'slug' => 'bracelets',
                'description' => 'Stunning bracelets to enhance your wrist. Choose from bangles, tennis bracelets, and charm bracelets.',
                'image' => 'uploads/categories/bracelets.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Earrings',
                'slug' => 'earrings',
                'description' => 'Exquisite earrings for every ear. From studs to drop earrings, find the perfect pair.',
                'image' => 'uploads/categories/earrings.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Anklets',
                'slug' => 'anklets',
                'description' => 'Delicate anklets to add sparkle to your feet. Perfect for summer and special occasions.',
                'image' => 'uploads/categories/anklets.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Brooches',
                'slug' => 'brooches',
                'description' => 'Vintage and modern brooches to elevate your fashion. Unique pieces for collectors and fashion enthusiasts.',
                'image' => 'uploads/categories/brooches.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Watches',
                'slug' => 'watches',
                'description' => 'Luxury and elegant watches for men and women. Timeless pieces that combine style and functionality.',
                'image' => 'uploads/categories/watches.jpg',
                'status' => 1,
            ],
            [
                'name' => 'Body Jewelry',
                'slug' => 'body-jewelry',
                'description' => 'Trendy body jewelry including nose rings, belly rings, and more. Express your unique style.',
                'image' => 'uploads/categories/body-jewelry.jpg',
                'status' => 1,
            ],
        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'name' => $category['name'],
                'slug' => $category['slug'],
                'description' => $category['description'],
                'image' => $category['image'],
                'status' => $category['status'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
