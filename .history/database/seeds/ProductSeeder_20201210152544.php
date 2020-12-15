<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'LG mobile',
            'price' => '200',
            'description' => 'description of the product',
            'gallery' => 'https://image.shutterstock.com/image-vector/shopping-online-on-website-mobile-260nw-1206570103.jpg'
        ]);
        //
    }
}
