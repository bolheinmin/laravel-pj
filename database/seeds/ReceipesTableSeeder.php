<?php

use Illuminate\Database\Seeder;

class ReceipesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('receipes')->insert([
        	'name' => 'Ramen',
        	'ingredients' => 'Meat, Salt, Noodles',
        	'category' => 'Japanese Food'
        ]);
    }
}
