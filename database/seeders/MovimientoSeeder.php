<?php

namespace Database\Seeders;

use App\Models\Movimiento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class movimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas =  [
            [
            'id'=> 1,
            'tipo_movimiento_id'=> 1,
            'persona_id'=> 1,
            'nombre' => 'movimiento 1',
            'fecha' => '2024-10-15',
            ]
        ];

        foreach ($datas as $data) {
            Movimiento::create($data);
        }
    }
}
