<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_statuses')->insert([
            'status' => 'Received'
        ]);
        DB::table('order_statuses')->insert([
            'status' => 'On the way'
        ]);
        DB::table('order_statuses')->insert([
            'status' => 'Delivered'
        ]);
    }
}
