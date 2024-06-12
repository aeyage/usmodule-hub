<?php

namespace Database\Seeders;

use App\Models\Department;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $departments = [
            'Computer Science',
            'Physics',
            'Mathematics',
            'Engineering',
            'Education',
            'English',
        ];
        foreach ($departments as $key => $department){

            Department::create(['name' => $department]);
        }
    }
}
