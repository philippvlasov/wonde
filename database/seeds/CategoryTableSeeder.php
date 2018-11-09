<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'category_uri' => 'sport',
                'category_name' => 'Спорт',
            ],
            [
                'category_uri' => 'it',
                'category_name' => 'Информационные технологии',
            ]
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
