<?php

namespace Database\Seeders;

use App\Models\TipoPersona;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoPersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'id' => 1,
                'nombre' => 'Cliente'
            ],
            [
                'id' => 2,
                'nombre' => 'Proveedor'
            ],
            [
                'id' => 3,
                'nombre' => 'Empleado'
            ]
        ];

        foreach ($datas as $data) {
            TipoPersona::create($data);
        }
    }
}
