<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Empleados;


class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('empleados')->insert([
        ['nombre' => 'Carlos', 'apellido' => 'Pérez', 'correo' => 'carlos@gmail.com', 'salario' => 3500.50],
        ['nombre' => 'María', 'apellido' => 'Lopez', 'correo' => 'maria@gmail.com', 'salario' => 4000.00],
        ['nombre' => 'José', 'apellido' => 'Gómez', 'correo' => 'jose@gmail.com', 'salario' => 2800.00],
        ['nombre' => 'Ana', 'apellido' => 'Rojas', 'correo' => 'ana@gmail.com', 'salario' => 3100.75],
        ['nombre' => 'Luis', 'apellido' => 'Quispe', 'correo' => 'luis@gmail.com', 'salario' => 3900.00],
        ['nombre' => 'Elena', 'apellido' => 'Vargas', 'correo' => 'elena@gmail.com', 'salario' => 4200.25],
        ['nombre' => 'Miguel', 'apellido' => 'Suarez', 'correo' => 'miguel@gmail.com', 'salario' => 3400.00],
        ['nombre' => 'Rosa', 'apellido' => 'Ramirez', 'correo' => 'rosa@gmail.com', 'salario' => 2950.90],
        ['nombre' => 'Pedro', 'apellido' => 'Mamani', 'correo' => 'pedro@gmail.com', 'salario' => 3100.10],
        ['nombre' => 'Lucía', 'apellido' => 'Salas', 'correo' => 'lucia@gmail.com', 'salario' => 3600.00],
    ]);
    }
}
