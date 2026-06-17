<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Product::create([
            'img' => 'test,png',
            'brand' => 'brand 1',
            'title' => 'title 1',
            'rating' => 4,
            'reviews' => 100,
            'sellPrice' => 500,
            'orders' => 20,
            'mrp' => 'mrp 1',
            'discount' => 10,
            'category' => 'category 1',
        ]);
        Product::create([
            'img' => 'test,png',
            'brand' => 'brand 2',
            'title' => 'title 2',
            'rating' => 3.5,
            'reviews' => 120,
            'sellPrice' => 40,
            'orders' => 10,
            'mrp' => 'mrp 1',
            'discount' => 15,
            'category' => 'category 2',
        ]);
    }
}
