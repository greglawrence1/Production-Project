<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            ['name' => 'Chalk Bag', 'brand' => 'Xplore','price' => 399],
            ['name' => 'Climbing Shoes', 'brand' => 'MrClimb','price' => 299],
            ['name' => 'Brush', 'brand' => 'Nike', 'price' => 399],
        ];

        foreach($products as $product) {
            Product::create([
                'name' => $product['name'],
                'brand' => $product['brand'],
                'price' => $product['price'],               
                                       
       ]);
    }
    }
}
