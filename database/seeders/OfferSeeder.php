<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offers')->insert([
            [
                'image' => 'apart-photo/dom1.jpg',
                'apartment' => false,
                'buy' => true,
                'address' => 'ул.Никольская, 15',
                'rooms' => 4,
                'square' => 120,
                'price' => 12000000,
                'number_phone' => '+7(852)258-52-60'
            ],
        ]);

    }
}
