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
            'name' => 'L',
            'email' => 'usman@usman.com',
            'password' =>Hash::make ('12345')
        ]);
        //
    }
}
