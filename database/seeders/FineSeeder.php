<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Fine;

class FineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fines = [
            ['fine_name' => 'Infraccion', 'service_time' => 5],
            ['fine_name' => 'Retraso', 'service_time' => 3],
            ['fine_name' => 'Falta de Asistencia', 'service_time' => 10],
            ['fine_name' => 'Mal Comportamiento', 'service_time' => 8],
            ['fine_name' => 'Uso Inadecuado de Instalaciones', 'service_time' => 6],
            ['fine_name' => 'Desorden', 'service_time' => 4],
            ['fine_name' => 'Irrespeto a Autoridad', 'service_time' => 7],
            ['fine_name' => 'Falta a Normas', 'service_time' => 2],
            ['fine_name' => 'No Entrega de Documentos', 'service_time' => 1],
            ['fine_name' => 'Comportamiento Inapropiado', 'service_time' => 9],
            ['fine_name' => 'Plagio', 'service_time' => 12],
            ['fine_name' => 'Falsificación', 'service_time' => 20],
            ['fine_name' => 'Violencia', 'service_time' => 15],
            ['fine_name' => 'Consumo de Alcohol', 'service_time' => 25],
            ['fine_name' => 'Daños a Propiedad', 'service_time' => 18],
        ];

        foreach($fines as $fine){
            Fine::create($fine);
        }

    }
}
