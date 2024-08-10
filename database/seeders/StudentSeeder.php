<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Teacher;

class StudentSeeder extends Seeder
{
    public function run()
    {
        $teacherIds = Teacher::pluck('id')->toArray();

        Student::create([
            'student_name' => 'Alice Johnson',
            'class_teacher_id' => $teacherIds[array_rand($teacherIds)],
            'class' => '10th Grade',
            'admission_date' => '2024-08-01',
            'yearly_fees' => 1000.00,
        ]);

        Student::create([
            'student_name' => 'Bob Brown',
            'class_teacher_id' => $teacherIds[array_rand($teacherIds)],
            'class' => '11th Grade',
            'admission_date' => '2024-08-01',
            'yearly_fees' => 1200.00,
        ]);
        // Add more students as needed
    }
}
