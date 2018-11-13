<?php

use Illuminate\Database\Seeder;
use App\Employee;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $employees = [
            [
                'name' => 'Джон Доу',
                'img' => 'images\team\member1.jpg',
                'slogan' => 'Дело в том, что точечное воздействие изящно синхронизирует охват аудитории.',
                'ln_link' => '#',
                'fb_link' => '#',
                'tw_link' => '#',
                'g_link' => '#',

            ],
            [
                'name' => 'Джон Доу',
                'img' => 'images\team\member2.jpg',
                'slogan' => 'Дело в том, что точечное воздействие изящно синхронизирует охват аудитории.',
                'ln_link' => '#',
                'fb_link' => '#',
                'tw_link' => '#',
                'g_link' => '#',

            ],
            [
                'name' => 'Стив Доу',
                'img' => 'images\team\member3.jpg',
                'slogan' => 'Дело в том, что точечное воздействие изящно синхронизирует охват аудитории.',
                'ln_link' => '#',
                'fb_link' => '#',
                'tw_link' => '#',
                'g_link' => '#',

            ],
            [
                'name' => 'Майк Доу',
                'img' => 'images\team\member4.jpg',
                'slogan' => 'Дело в том, что точечное воздействие изящно синхронизирует охват аудитории.',
                'ln_link' => '#',
                'fb_link' => '#',
                'tw_link' => '#',
                'g_link' => '#',

            ],
        ];

        foreach ($employees as $employee) {
            Employee::create($employee);
        }
    }
}
