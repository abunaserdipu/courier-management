<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
            'address' => 'Mirpur-10'
        ]);
        DB::table('addresses')->insert([
            'address' => 'Agargaon'
        ]);
        DB::table('addresses')->insert([
            'address' => 'Dhanmondi'
        ]);
    }
}
