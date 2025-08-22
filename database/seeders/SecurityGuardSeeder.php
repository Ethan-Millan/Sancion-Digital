<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\SecurityGuard;

class SecurityGuardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $guards = [
            ['guard_id' => 'VIG1234567', 'name' => 'Juan', 'last_name' => 'Perez', 'gender' => 'Hombre', 'birth_date' => '1985-05-15', 'email' => 'juan.perez@example.com', 'password' => '1', 'role' => 'Profesor'],
            ['guard_id' => 'VIG2345678', 'name' => 'Maria', 'last_name' => 'Lopez', 'gender' => 'Mujer', 'birth_date' => '1990-06-20', 'email' => 'maria.lopez@example.com', 'password' => 'contra2', 'role' => 'Miembro de seguridad'],
            ['guard_id' => 'VIG3456789', 'name' => 'Carlos', 'last_name' => 'Martinez', 'gender' => 'Hombre', 'birth_date' => '1980-07-10', 'email' => 'carlos.martinez@example.com', 'password' => 'contra3', 'role' => 'Profesor'],
            ['guard_id' => 'VIG4567890', 'name' => 'Ana', 'last_name' => 'Gonzalez', 'gender' => 'Mujer', 'birth_date' => '1995-08-25', 'email' => 'ana.gonzalez@example.com', 'password' => 'contra4', 'role' => 'Profesor'],
            ['guard_id' => 'VIG5678901', 'name' => 'Pedro', 'last_name' => 'Hernandez', 'gender' => 'Hombre', 'birth_date' => '1982-09-30', 'email' => 'pedro.hernandez@example.com', 'password' => 'contra5', 'role' => 'Miembro de Seguridad'],
            ['guard_id' => 'VIG6789012', 'name' => 'Laura', 'last_name' => 'Torres', 'gender' => 'Mujer', 'birth_date' => '1988-10-05', 'email' => 'laura.torres@example.com', 'password' => 'contra6', 'role' => 'Profesor'],
            ['guard_id' => 'VIG7890123', 'name' => 'Jorge', 'last_name' => 'Jimenez', 'gender' => 'Hombre', 'birth_date' => '1992-11-15', 'email' => 'jorge.jimenez@example.com', 'password' => 'contra7', 'role' => 'Miembro de Seguridad'],
            ['guard_id' => 'VIG8901234', 'name' => 'Sofia', 'last_name' => 'Mendoza', 'gender' => 'Mujer', 'birth_date' => '1993-12-20', 'email' => 'sofia.mendoza@example.com', 'password' => 'contra8', 'role' => 'Profesor'],
            ['guard_id' => 'VIG9012345', 'name' => 'Andres', 'last_name' => 'Ramirez', 'gender' => 'Hombre', 'birth_date' => '1989-01-11', 'email' => 'andres.ramirez@example.com', 'password' => 'contra9', 'role' => 'Administrador Administrativo'],
            ['guard_id' => 'VIG0123456', 'name' => 'Patricia', 'last_name' => 'Diaz', 'gender' => 'Mujer', 'birth_date' => '1991-02-18', 'email' => 'patricia.diaz@example.com', 'password' => 'contra10', 'role' => 'Administrador Administrativo'],
            ['guard_id' => 'VIG1122334', 'name' => 'Alberto', 'last_name' => 'Quintero', 'gender' => 'Hombre', 'birth_date' => '1986-07-15', 'email' => 'alberto.quintero@example.com', 'password' => 'contra11', 'role' => 'Miembro de seguridad'],
            ['guard_id' => 'VIG2233445', 'name' => 'Lucia', 'last_name' => 'Morales', 'gender' => 'Mujer', 'birth_date' => '1991-04-25', 'email' => 'lucia.morales@example.com', 'password' => 'contra12', 'role' => 'Profesor'],
            ['guard_id' => 'VIG3344556', 'name' => 'Oscar', 'last_name' => 'Villalobos', 'gender' => 'Hombre', 'birth_date' => '1983-03-12', 'email' => 'oscar.villalobos@example.com', 'password' => 'contra13', 'role' => 'Miembro de seguridad'],
            ['guard_id' => 'VIG4455667', 'name' => 'Veronica', 'last_name' => 'Castro', 'gender' => 'Mujer', 'birth_date' => '1990-01-30', 'email' => 'veronica.castro@example.com', 'password' => 'contra14', 'role' => 'Profesor'],
            ['guard_id' => 'VIG5566778', 'name' => 'Ricardo', 'last_name' => 'Santos', 'gender' => 'Hombre', 'birth_date' => '1987-08-05', 'email' => 'ricardo.santos@example.com', 'password' => 'contra15', 'role' => 'Administrador Administrativo'],
        ];



        foreach($guards as $guard){
            SecurityGuard::create($guard);
        }
    }
}
