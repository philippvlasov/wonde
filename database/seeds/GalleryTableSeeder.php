<?php

use Illuminate\Database\Seeder;

class GalleryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gallery')->insert([
            [
                'img_link' => 'https://picsum.photos/300/300/?image=1019'
            ],
            [
                'img_link' => 'https://picsum.photos/300/300/?image=600'
            ],
            [
                'img_link' => 'https://picsum.photos/300/300/?image=500'
            ],
            [
                'img_link' => 'https://picsum.photos/300/300/?image=550'
            ],
            [
                'img_link' => 'https://picsum.photos/300/300/?image=701'
            ],
            [
                'img_link' => 'https://picsum.photos/300/300/?image=702'
            ],
            [
                'img_link' => 'https://picsum.photos/300/300/?image=900'
            ],
            [
                'img_link' => 'https://picsum.photos/300/300/?image=703'
            ],

        ]);
    }
}
