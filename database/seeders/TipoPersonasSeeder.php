<?php

namespace Database\Seeders;

use App\Models\TipoPersonas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoPersonasSeeder extends Seeder
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
            TipoPersonas::create($data);
        }
    }
}
