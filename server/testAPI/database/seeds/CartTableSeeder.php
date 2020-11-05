<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        DB::table('carts')->truncate();
        DB::table('carts')->insert([
            'id' => '1',
            'products_id' => '1',
            'user_id' => '1'
        ]);
        DB::table('carts')->insert([
            'id' => '2',
            'products_id' => '2',
            'user_id' => '2'
        ]);

    }
}
