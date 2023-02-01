<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([
            'receiver_name' => 'Md Mehedi Hasan',
            'receiver_contact' => '019952356',
            'receiver_address' => 'Dhanmondi',
            'sender_name' => 'Md Abu Naser Dipu',
            'sender_contact' => '01521327682',
            'receiver_address' => 'Mirpur-10',
            'order_type' => '1',
            'order_status' => '1',
            'order_weight' => '1',
            'order_price' => '70'
        ]);
    }
}
