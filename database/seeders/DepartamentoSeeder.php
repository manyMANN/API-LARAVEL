<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departamentos')->insert(
            [
                'nombre' => 'Sistemas',
                'activo' => 1,
            ]
        );
        DB::table('departamentos')->insert(
            [
                'nombre' => 'Contabilidad',
                'activo' => 1,
            ]
        );
        DB::table('departamentos')->insert(
            [
                'nombre' => 'Almacén',
                'activo' => 1,
            ]
        );
        DB::table('departamentos')->insert(
            [
                'nombre' => 'Compras',
                'activo' => 1,
            ]
        );
        DB::table('departamentos')->insert(
            [
                'nombre' => 'Comercial',
                'activo' => 1,
            ]
        );
    }
}
