<?php

namespace Database\Seeders;

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
        DB::table('products')->insert([
            'id'=>null,
            'title'=>'First Product',
            'price'=>10000,
        ]);
        DB::table('products')->insert([
            'id'=>null,
            'title'=>'Second Product',
            'price'=>20000,
        ]);
        DB::table('products')->insert([
            'id'=>null,
            'title'=>'Third Product',
            'price'=>14000,
        ]);

    }
}
