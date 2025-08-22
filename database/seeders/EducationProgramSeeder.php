<?php

namespace Database\Seeders;

use App\Models\EducationProgram;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EducationProgramSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $programs = [
            ['program_name' => 'Ingenieria Industrial', 'program_abbreviation' => 'IND'],
            ['program_name' => 'Ingenieria Quimica', 'program_abbreviation' => 'IQ'],
            ['program_name' => 'Licenciatura en Turismo', 'program_abbreviation' => 'LT'],
            ['program_name' => 'Licenciatura en Historia', 'program_abbreviation' => 'LH'],
            ['program_name' => 'Licenciatura en Filosofia', 'program_abbreviation' => 'LF'],
            ['program_name' => 'Ingenieria Ambiental', 'program_abbreviation' => 'IA'],
            ['program_name' => 'Licenciatura en Enfermeria', 'program_abbreviation' => 'LE'],
            ['program_name' => 'Licenciatura en Biologia', 'program_abbreviation' => 'LB'],
            ['program_name' => 'Ingenieria en Software', 'program_abbreviation' => 'ISW'],
            ['program_name' => 'Licenciatura en Matematicas', 'program_abbreviation' => 'LM'],
        ];

        foreach($programs as $program){

            EducationProgram::create($program);

        }
    }
}
