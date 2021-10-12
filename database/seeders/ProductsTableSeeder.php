<?php

namespace Database\Seeders;

use App\Models\Product;
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
        $product = new Product();
        $product->name="Trà sữa chân châu";
        $product->image="chưa có";
        $product->price="16451";
        $product->category_id=1;
        $product->save();
        $product = new Product();
        $product->name="Trà sữa chân châu";
        $product->image="chưa có";
        $product->price="16451";
        $product->category_id=1;
        $product->save();
        $product = new Product();
        $product->name="Trà sữa chân châu";
        $product->image="chưa có";
        $product->price="16451";
        $product->category_id=1;
        $product->save();
        $product = new Product();
        $product->name="Trà sữa chân châu";
        $product->image="chưa có";
        $product->price="16451";
        $product->category_id=1;
        $product->save();
    }
}
