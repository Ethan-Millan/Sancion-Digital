<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alert;

class AlertSeeder extends Seeder
{

    public function run(): void
    {
        $alerts = [
            [
                'title' => 'Cierre de Biblioteca',
                'date' => '2024-01-10',
                'category' => 'Baja',
                'description' => 'La biblioteca cerrará por mantenimiento.',
                'guard_id' => 'VIG1234567',
            ],
            [
                'title' => 'Actualización de Reglamento',
                'date' => '2024-02-05',
                'category' => 'Media',
                'description' => 'Se han actualizado las normas de convivencia.',
                'guard_id' => 'VIG2233445',
            ],
            [
                'title' => 'Cambio de Horario',
                'date' => '2024-11-15',
                'category' => 'Alta',
                'description' => 'Se implementarán nuevos horarios para el semestre.',
                'guard_id' => 'VIG5566778',
            ],
        ];

        foreach($alerts as $alert){
            Alert::create($alert);
        }

    }
}
