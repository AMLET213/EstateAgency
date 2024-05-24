<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estates')->insert([
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
            [
                'image' => 'apart-photo/dom33.jpg',
                'apartment' => false,
                'buy' => false,
                'address' => 'ул.Никольская, 15',
                'rooms' => 4,
                'square' => 120,
                'price' => 300000,
                'number_phone' => '+7(852)258-52-60'
            ],
            [
                'image' => 'apart-photo/dom2.png',
                'apartment' => false,
                'buy' => true,
                'address' => 'ул.Малахитовая, 16',
                'rooms' => 6,
                'square' => 150,
                'price' => 15000000,
                'number_phone' => '+7(510)406-17-15'
            ],
            [
                'image' => 'apart-photo/dom34.png',
                'apartment' => false,
                'buy' => false,
                'address' => 'ул.Малахитовая, 16',
                'rooms' => 6,
                'square' => 150,
                'price' => 350000,
                'number_phone' => '+7(510)406-17-15'
            ],
            [
                'image' => 'apart-photo/dom3.jpg',
                'apartment' => false,
                'buy' => true,
                'address' => 'ул.Ворошилова, 20',
                'rooms' => 3,
                'square' => 100,
                'price' => 9000000,
                'number_phone' => '+7(546)180-94-27'
            ],
            [
                'image' => 'apart-photo/dom35.jpg',
                'apartment' => false,
                'buy' => false,
                'address' => 'ул.Ворошилова, 20',
                'rooms' => 3,
                'square' => 100,
                'price' => 200000,
                'number_phone' => '+7(546)180-94-27'
            ],
            [
                'image' => 'apart-photo/dom4.jpg',
                'apartment' => false,
                'buy' => true,
                'address' => 'ул.Культурная, 8',
                'rooms' => 6,
                'square' => 300,
                'price' => 20000000,
                'number_phone' => '+7(520)348-54-20'
            ],
            [
                'image' => 'apart-photo/dom36.png',
                'apartment' => false,
                'buy' => false,
                'address' => 'ул.Культурная, 8',
                'rooms' => 6,
                'square' => 300,
                'price' => 700000,
                'number_phone' => '+7(520)348-54-20'
            ],
            [
                'image' => 'apart-photo/dom5.jpg',
                'apartment' => false,
                'buy' => true,
                'address' => 'ул.Институтская, 6',
                'rooms' => 4,
                'square' => 160,
                'price' => 27000000,
                'number_phone' => '+7(912)785-14-92'
            ],
            [
                'image' => 'apart-photo/dom37.jpg',
                'apartment' => false,
                'buy' => false,
                'address' => 'ул.Институтская, 6',
                'rooms' => 4,
                'square' => 160,
                'price' => 500000,
                'number_phone' => '+7(912)785-14-92'
            ],
            [
                'image' => 'apart-photo/dom6.jpg',
                'apartment' => false,
                'buy' => true,
                'address' => 'ул.Аношкина, 30',
                'rooms' => 5,
                'square' => 300,
                'price' => 19000000,
                'number_phone' => '+7(928)050-68-09'
            ],
            [
                'image' => 'apart-photo/dom38.jpg',
                'apartment' => false,
                'buy' => false,
                'address' => 'ул.Аношкина, 30',
                'rooms' => 5,
                'square' => 300,
                'price' => 600000,
                'number_phone' => '+7(928)050-68-09'
            ],
            [
                'image' => 'apart-photo/dom7.jpg',
                'apartment' => false,
                'buy' => true,
                'address' => 'ул.Креативная, 11',
                'rooms' => 5,
                'square' => 220,
                'price' => 30000000,
                'number_phone' => '+7(578)007-59-98'
            ],
            [
                'image' => 'apart-photo/dom40.jpg',
                'apartment' => false,
                'buy' => false,
                'address' => 'ул.Креативная, 11',
                'rooms' => 5,
                'square' => 220,
                'price' => 900000,
                'number_phone' => '+7(578)007-59-98'
            ],
            [
                'image' => 'apart-photo/dom8.jpg',
                'apartment' => false,
                'buy' => true,
                'address' => 'ул.Креативная, 23',
                'rooms' => 4,
                'square' => 330,
                'price' => 34000000,
                'number_phone' => '+7(657)404-33-25'
            ],
            [
                'image' => 'apart-photo/dom45.jpg',
                'apartment' => false,
                'buy' => false,
                'address' => 'ул.Креативная, 23',
                'rooms' => 4,
                'square' => 330,
                'price' => 1000000,
                'number_phone' => '+7(657)404-33-25'
            ],
            [
                'image' => 'apart-photo/dom9.webp',
                'apartment' => false,
                'buy' => true,
                'address' => 'ул.Болейко, 18',
                'rooms' => 3,
                'square' => 200,
                'price' => 13000000,
                'number_phone' => '+7(750)608-28-52'
            ],
            [
                'image' => 'apart-photo/dom46.jpg',
                'apartment' => false,
                'buy' => false,
                'address' => 'ул.Болейко, 18',
                'rooms' => 3,
                'square' => 200,
                'price' => 400000,
                'number_phone' => '+7(750)608-28-52'
            ],
            [
                'image' => 'apart-photo/dom10.jpg',
                'apartment' => false,
                'buy' => true,
                'address' => 'ул.Бузаева, 19',
                'rooms' => 8,
                'square' => 400,
                'price' => 40000000,
                'number_phone' => '+7(281)882-36-47'
            ],
            [
                'image' => 'apart-photo/dom47.jpg',
                'apartment' => false,
                'buy' => false,
                'address' => 'ул.Бузаева, 19',
                'rooms' => 8,
                'square' => 400,
                'price' => 1200000,
                'number_phone' => '+7(281)882-36-47'
            ],
            [
                'image' => 'apart-photo/dom11.jpg',
                'apartment' => false,
                'buy' => true,
                'address' => 'ул.Ленина, 48',
                'rooms' => 3,
                'square' => 90,
                'price' => 8000000,
                'number_phone' => '+7(801)493-55-05'
            ],
            [
                'image' => 'apart-photo/dom48.jpg',
                'apartment' => false,
                'buy' => false,
                'address' => 'ул.Ленина, 48',
                'rooms' => 3,
                'square' => 90,
                'price' => 150000,
                'number_phone' => '+7(801)493-55-05'
            ],
            [
                'image' => 'apart-photo/dom12.jpg',
                'apartment' => false,
                'buy' => true,
                'address' => 'ул.Солнечная, 13',
                'rooms' => 4,
                'square' => 200,
                'price' => 14000000,
                'number_phone' => '+7(248)213-13-99'
            ],
            [
                'image' => 'apart-photo/dom39.jpg',
                'apartment' => false,
                'buy' => false,
                'address' => 'ул.Солнечная, 13',
                'rooms' => 4,
                'square' => 200,
                'price' => 200000,
                'number_phone' => '+7(248)213-13-99'
            ],
            [
                'image' => 'apart-photo/dom13.jpg',
                'apartment' => true,
                'buy' => true,
                'address' => 'ул.Южная, 21',
                'rooms' => 1,
                'square' => 45,
                'price' => 7000000,
                'number_phone' => '+7(222)605-52-56'
            ],
            [
                'image' => 'apart-photo/dom25.jpg',
                'apartment' => true,
                'buy' => false,
                'address' => 'ул.Южная, 21',
                'rooms' => 1,
                'square' => 45,
                'price' => 100000,
                'number_phone' => '+7(222)605-52-56'
            ],
            [
                'image' => 'apart-photo/dom14.jpg',
                'apartment' => true,
                'buy' => true,
                'address' => 'ул.Горная, 67',
                'rooms' => 2,
                'square' => 60,
                'price' => 10000000,
                'number_phone' => '+7(626)225-56-40'
            ],
            [
                'image' => 'apart-photo/dom26.jpg',
                'apartment' => true,
                'buy' => false,
                'address' => 'ул.Горная, 67',
                'rooms' => 2,
                'square' => 60,
                'price' => 250000,
                'number_phone' => '+7(626)225-56-40'
            ],
            [
                'image' => 'apart-photo/dom15.jpg',
                'apartment' => true,
                'buy' => true,
                'address' => 'ул.Советская, 33',
                'rooms' => 1,
                'square' => 40,
                'price' => 6000000,
                'number_phone' => '+7(630)926-20-32'
            ],
            [
                'image' => 'apart-photo/dom27.jpg',
                'apartment' => true,
                'buy' => false,
                'address' => 'ул.Советская, 33',
                'rooms' => 1,
                'square' => 40,
                'price' => 150000,
                'number_phone' => '+7(630)926-20-32'
            ],
            [
                'image' => 'apart-photo/dom16.jpg',
                'apartment' => true,
                'buy' => true,
                'address' => 'ул.Мантулинская, 11',
                'rooms' => 2,
                'square' => 70,
                'price' => 13000000,
                'number_phone' => '+7(951)422-78-40'
            ],
            [
                'image' => 'apart-photo/dom28.webp',
                'apartment' => true,
                'buy' => false,
                'address' => 'ул.Мантулинская, 11',
                'rooms' => 2,
                'square' => 70,
                'price' => 230000,
                'number_phone' => '+7(951)422-78-40'
            ],
            [
                'image' => 'apart-photo/dom17.jpg',
                'apartment' => true,
                'buy' => true,
                'address' => 'ул.Казакова, 20',
                'rooms' => 2,
                'square' => 30,
                'price' => 20000000,
                'number_phone' => '+7(955)366-99-79'
            ],
            [
                'image' => 'apart-photo/dom29.webp',
                'apartment' => true,
                'buy' => false,
                'address' => 'ул.Казакова, 20',
                'rooms' => 2,
                'square' => 30,
                'price' => 250000,
                'number_phone' => '+7(955)366-99-79'
            ],
            [
                'image' => 'apart-photo/dom18.jpg',
                'apartment' => true,
                'buy' => true,
                'address' => 'ул.Лесопарковая, 24',
                'rooms' => 3,
                'square' => 60,
                'price' => 15000000,
                'number_phone' => '+7(612)923-28-27'
            ],
            [
                'image' => 'apart-photo/dom30.jpg',
                'apartment' => true,
                'buy' => false,
                'address' => 'ул.Лесопарковая, 24',
                'rooms' => 3,
                'square' => 60,
                'price' => 300000,
                'number_phone' => '+7(612)923-28-27'
            ],
            [
                'image' => 'apart-photo/dom19.jpg',
                'apartment' => true,
                'buy' => true,
                'address' => 'ул.Эльтонская, 81',
                'rooms' => 2,
                'square' => 50,
                'price' => 8000000,
                'number_phone' => '+7(815)092-40-33'
            ],
            [
                'image' => 'apart-photo/dom31.jpg',
                'apartment' => true,
                'buy' => false,
                'address' => 'ул.Эльтонская, 81',
                'rooms' => 2,
                'square' => 50,
                'price' => 180000,
                'number_phone' => '+7(815)092-40-33'
            ],
            [
                'image' => 'apart-photo/dom20.jpeg',
                'apartment' => true,
                'buy' => true,
                'address' => 'ул.Сетевая, 42',
                'rooms' => 2,
                'square' => 45,
                'price' => 7000000,
                'number_phone' => '+7(072)714-75-19'
            ],
            [
                'image' => 'apart-photo/dom32.jpg',
                'apartment' => true,
                'buy' => false,
                'address' => 'ул.Сетевая, 42',
                'rooms' => 2,
                'square' => 45,
                'price' => 170000,
                'number_phone' => '+7(072)714-75-19'
            ],
            [
                'image' => 'apart-photo/dom21.jpg',
                'apartment' => true,
                'buy' => true,
                'address' => 'ул.Достаевского, 27',
                'rooms' => 1,
                'square' => 40,
                'price' => 4000000,
                'number_phone' => '+7(017)000-08-23'
            ],
            [
                'image' => 'apart-photo/dom41.jpg',
                'apartment' => true,
                'buy' => false,
                'address' => 'ул.Достаевского, 27',
                'rooms' => 1,
                'square' => 40,
                'price' => 120000,
                'number_phone' => '+7(017)000-08-23'
            ],
            [
                'image' => 'apart-photo/dom22.jpg',
                'apartment' => true,
                'buy' => true,
                'address' => 'ул.Никитина, 4',
                'rooms' => 2,
                'square' => 53,
                'price' => 9000000,
                'number_phone' => '+7(631)770-49-81'
            ],
            [
                'image' => 'apart-photo/dom42.jpg',
                'apartment' => true,
                'buy' => false,
                'address' => 'ул.Никитина, 4',
                'rooms' => 2,
                'square' => 53,
                'price' => 200000,
                'number_phone' => '+7(631)770-49-81'
            ],
            [
                'image' => 'apart-photo/dom23.jpg',
                'apartment' => true,
                'buy' => true,
                'address' => 'ул.Годовикова, 31',
                'rooms' => 1,
                'square' => 42,
                'price' => 4000000,
                'number_phone' => '+7(293)481-59-98'
            ],
            [
                'image' => 'apart-photo/dom43.jpeg',
                'apartment' => true,
                'buy' => false,
                'address' => 'ул.Годовикова, 31',
                'rooms' => 1,
                'square' => 42,
                'price' => 150000,
                'number_phone' => '+7(293)481-59-98'
            ],
            [
                'image' => 'apart-photo/dom24.jpg',
                'apartment' => true,
                'buy' => true,
                'address' => 'ул.Орловская, 62',
                'rooms' => 1,
                'square' => 39,
                'price' => 4000000,
                'number_phone' => '+7(813)436-77-93'
            ],
            [
                'image' => 'apart-photo/dom44.jpg',
                'apartment' => true,
                'buy' => false,
                'address' => 'ул.Орловская, 62',
                'rooms' => 1,
                'square' => 39,
                'price' => 110000,
                'number_phone' => '+7(813)436-77-93'
            ]
        ]);

    }
}
