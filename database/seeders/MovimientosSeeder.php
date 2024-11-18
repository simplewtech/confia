<?php

namespace Database\Seeders;

use App\Models\Movimientos;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovimientosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas =  [
            [
            'id'=> 1,
            'tipo_movimientos_id'=> 1,
            'personas_id'=> 1,
            'nombre' => 'movimiento 1',
            'fecha' => '2024-10-15',
            ]
        ];

        foreach ($datas as $data) {
            Movimientos::create($data);
        }
    }
}
