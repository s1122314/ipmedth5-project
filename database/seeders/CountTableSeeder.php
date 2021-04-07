<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CountTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('count')->insert([
            'amount' => 0
        ]);
    }
}