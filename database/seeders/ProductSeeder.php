<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = config('dataseeder.products');
        //dd($products);
        foreach ($products as $product) {
            $new_product = new Product();
            $new_product->name = $product['name'];
            $new_product->slug = Str::slug($new_product->name, '-');
            $new_product->weight = $product['weight'];
            $new_product->price = $product['price'];
            $new_product->image_url = $product['image_url'];
            $new_product->quantity = $product['quantity'];
            $new_product->category = $product['category'];
            $new_product->save();
        }
    }
}
