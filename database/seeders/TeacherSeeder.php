<?php 
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    public function run()
    {
        $teachers = [
            ['teacher_name' => 'John Doe'],
            ['teacher_name' => 'Jane Smith'],
        ];

        foreach ($teachers as $teacher) {
            if (!DB::table('teachers')->where('teacher_name', $teacher['teacher_name'])->exists()) {
                DB::table('teachers')->insert($teacher);
            }
        }
    }
}
