<?php

use Illuminate\Database\Seeder;

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

            ]
        ];

        foreach ($employees as $employee) {
            News::create($employee);
        }
    }
}
