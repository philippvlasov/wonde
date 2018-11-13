<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(CategoryTableSeeder::class);
         $this->call(NewsTableSeeder::class);
         $this->call(EmployeesTableSeeder::class);
         $this->call(PartnersTableSeeder::class);
         $this->call(GalleryTableSeeder::class);
    }
}
