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
            'gallery' => 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.searchenginejournal.com%2Fusing-images-legally-online-guide%2F319403%2F&psig=AOvVaw0ceq-BZn1Ab3kW1lV7RzEV&ust=1607682301908000&source=images&cd=vfe&ved=0CAIQjRxqFwoTCMCP2LaZw-0CFQAAAAAdAAAAABAD'
            
        ]);
        //
    }
}
