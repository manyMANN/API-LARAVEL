<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('empleados')->insert(
            [
                'nombre' => 'Lalo Barriguett',
                'fechanaci' => '2000-04-20',
                'correo' => 'ebarriguett@gmail.com',
                'activo' => 1,
                'id_departamento' => 1,
            ]
        );
        DB::table('empleados')->insert(
            [
                'nombre' => 'Oscar Vivar',
                'fechanaci' => '1990-05-16',
                'correo' => 'oscar.vivar@servimsa.com',
                'activo' => 1,
                'id_departamento' => 1,
            ],
        );
    }
}
