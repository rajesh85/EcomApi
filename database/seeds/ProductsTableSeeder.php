<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = factory(App\Models\Product::class, 50)->create();
        $products->each(function ($product){factory(App\Models\Review::class, 10)->create(['product_id'=>$product->id]);});
    }
}
