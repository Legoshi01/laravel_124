<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
        $data = [
            [
                'product_name' => 'iphone 14',
                'product_type' => '1',
                'price' => '39900',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ],
            [
                'product_name' => 'Galaxy s20',
                'product_type' => '1',
                'price' => '25900',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'product_name' => 'LG Smart TV',
                'product_type' => '2',
                'price' => '30900',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'product_name' => 'Samsung Smart TV',
                'product_type' => '2',
                'price' => '40900',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];
        DB::table('products')->insert($data);
    }
}
