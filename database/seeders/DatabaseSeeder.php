<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Product::create([
            'img'       => '/assets/pic1.jpg',
            'brand'     => 'Nike',
            'title'     => 'Nike Air Max 270',
            'rating'    => 4.5,
            'reviews'   => 120,
            'sellPrice' => 7999.00,
            'orders'    => '350',
            'mrp'       => '9999',
            'discount'  => 20,
            'category'  => 'men',
        ]);

        Product::create([
            'img'       => '/assets/pic2.jpg',
            'brand'     => 'Adidas',
            'title'     => 'Adidas Ultraboost 22',
            'rating'    => 4.8,
            'reviews'   => 210,
            'sellPrice' => 10499.00,
            'orders'    => '540',
            'mrp'       => '14999',
            'discount'  => 30,
            'category'  => 'women',
        ]);
    }
}
