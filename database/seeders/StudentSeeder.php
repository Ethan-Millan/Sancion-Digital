<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
    $students = [
        [
            'student_id' => 'ALUM123456',
            'name' => 'Luis',
            'last_name' => 'Ramirez',
            'gender' => 'Hombre',
            'birth_date' => '2000-01-01',
            'email' => 'luis.ramirez@example.com',
            'password' => '1',
            'grade' => 2,
            'group' => 'A',
            'education_program_id' => 1,
        ],
        [
            'student_id' => 'ALUM234567',
            'name' => 'Claudia',
            'last_name' => 'Martinez',
            'gender' => 'Mujer',
            'birth_date' => '1999-02-02',
            'email' => 'claudia.martinez@example.com',
            'password' => 'contra2',
            'grade' => 3,
            'group' => 'B',
            'education_program_id' => 2,
        ],
        [
            'student_id' => 'ALUM345678',
            'name' => 'Fernando',
            'last_name' => 'Gonzalez',
            'gender' => 'Hombre',
            'birth_date' => '1998-03-03',
            'email' => 'fernando.gonzalez@example.com',
            'password' => 'contra3',
            'grade' => 4,
            'group' => 'C',
            'education_program_id' => 3,
        ],
        [
            'student_id' => 'ALUM456789',
            'name' => 'Isabel',
            'last_name' => 'Lopez',
            'gender' => 'Mujer',
            'birth_date' => '2001-04-04',
            'email' => 'isabel.lopez@example.com',
            'password' => 'contra4',
            'grade' => 1,
            'group' => 'D',
            'education_program_id' => 4,
        ],
        [
            'student_id' => 'ALUM567890',
            'name' => 'Raul',
            'last_name' => 'Torres',
            'gender' => 'Hombre',
            'birth_date' => '2000-05-05',
            'email' => 'raul.torres@example.com',
            'password' => 'contra5',
            'grade' => 2,
            'group' => 'A',
            'education_program_id' => 5,
        ],
        [
            'student_id' => 'ALUM678901',
            'name' => 'Monica',
            'last_name' => 'Hernandez',
            'gender' => 'Mujer',
            'birth_date' => '1997-06-06',
            'email' => 'monica.hernandez@example.com',
            'password' => 'contra6',
            'grade' => 3,
            'group' => 'B',
            'education_program_id' => 6,
        ],
        [
            'student_id' => 'ALUM789012',
            'name' => 'David',
            'last_name' => 'Diaz',
            'gender' => 'Hombre',
            'birth_date' => '1998-07-07',
            'email' => 'david.diaz@example.com',
            'password' => 'contra7',
            'grade' => 4,
            'group' => 'C',
            'education_program_id' => 7,
        ],
        [
            'student_id' => 'ALUM890123',
            'name' => 'Patricia',
            'last_name' => 'Mendoza',
            'gender' => 'Mujer',
            'birth_date' => '1999-08-08',
            'email' => 'patricia.mendoza@example.com',
            'password' => 'contra8',
            'grade' => 1,
            'group' => 'D',
            'education_program_id' => 8,
        ],
        [
            'student_id' => 'ALUM901234',
            'name' => 'Arturo',
            'last_name' => 'Ramirez',
            'gender' => 'Hombre',
            'birth_date' => '2000-09-09',
            'email' => 'arturo.ramirez@example.com',
            'password' => 'contra9',
            'grade' => 2,
            'group' => 'A',
            'education_program_id' => 9,
        ],
        [
            'student_id' => 'ALUM012345',
            'name' => 'Laura',
            'last_name' => 'Jimenez',
            'gender' => 'Mujer',
            'birth_date' => '1998-10-10',
            'email' => 'laura.jimenez@example.com',
            'password' => 'contra10',
            'grade' => 3,
            'group' => 'B',
            'education_program_id' => 10,
        ],
    ];



        foreach($students as $student){
            Student::create($student);
        }
    }
}
