<?php

namespace Database\Seeders;

use App\Models\MovimientoDetalle;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovimientoDetalleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas =  [
            [
            'id'=> '1',
            'movimiento_id'=> 1,
            'producto_id'=> 1,
            'nombre' => 'detalle 1',
            'cantidad' => '5',
            'valor' => '35',
            ]
        ];

        foreach ($datas as $data) {
            MovimientoDetalle::create($data);
        }
    }
}

