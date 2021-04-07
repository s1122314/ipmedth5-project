<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;


class AmountTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('led')->insert([
            'led_on' => 'uit'
        ]);
    }
}