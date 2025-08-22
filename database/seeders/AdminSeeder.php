<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admins = [
            [
                'admin_id' => 'MDEO220054',
                'name' => 'Ethan',
                'last_name' => 'Millan',
                'birth_date' => '1983-03-15',
                'email' => 'ethan.millan@example.com',
                'password' => '1',
                'gender' => 'Hombre',
            ],
            [
                'admin_id' => 'ADM2345678',
                'name' => 'Ana',
                'last_name' => 'Rivera',
                'birth_date' => '1985-06-20',
                'email' => 'ana.rivera@example.com',
                'password' => 'contra2',
                'gender' => 'Mujer',
            ],
            [
                'admin_id' => 'ADM3456789',
                'name' => 'Roberto',
                'last_name' => 'Sanchez',
                'birth_date' => '1980-12-11',
                'email' => 'roberto.sanchez@example.com',
                'password' => 'contra3',
                'gender' => 'Hombre',
            ],
            [
                'admin_id' => 'ADM4567890',
                'name' => 'Paola',
                'last_name' => 'Gutierrez',
                'birth_date' => '1992-08-05',
                'email' => 'paola.gutierrez@example.com',
                'password' => 'contra4',
                'gender' => 'Mujer',
            ],
            [
                'admin_id' => 'ADM5678901',
                'name' => 'Luis',
                'last_name' => 'Dominguez',
                'birth_date' => '1988-10-10',
                'email' => 'luis.dominguez@example.com',
                'password' => 'contra5',
                'gender' => 'Hombre',
            ],
        ];


        foreach($admins as $admin){
            Admin::create($admin);
        }

    }
}
