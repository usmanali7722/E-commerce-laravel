<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('table_products')->insert([
            'name' => 'LG mobile',
            'price' => '200',
            'description' => 'description of the product',
            'category' => 'Mobile',
            'gallery' => 'https://image.shutterstock.com/image-vector/shopping-online-on-website-mobile-260nw-1206570103.jpg'
        ]);
            
    }
}
