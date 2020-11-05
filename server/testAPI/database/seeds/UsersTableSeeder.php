<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        DB::table('users')->truncate();
        DB::table('users')->insert([
            'id' => '1',
            'name' => 'damy',
            'email' => 'damy@email.com',
            'password' => 'damy1234'

        ]);
    }
}
