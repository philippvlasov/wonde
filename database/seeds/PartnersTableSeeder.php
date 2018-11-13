<?php

use Illuminate\Database\Seeder;

class PartnersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners')->insert([
            [
                'img' => 'logo1.png'
            ],
            [
                'img' => 'logo2.png'
            ],
            [
                'img' => 'logo3.png'
            ],
            [
                'img' => 'logo4.png'
            ],
            [
                'img' => 'logo5.png'
            ],
            [
                'img' => 'logo6.png'
            ],
        ]);
    }
}
