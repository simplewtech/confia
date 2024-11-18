<?php

namespace Database\Seeders;

use App\Models\MovimientosDetalles;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MovimientosDetallesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas =  [
            [
            'id'=> '1',
            'movimientos_id'=> 1,
            'productos_id'=> 1,
            'nombre' => 'detalle 1',
            'cantidad' => '5',
            'valor' => '35',
            ]
        ];

        foreach ($datas as $data) {
            MovimientosDetalles::create($data);
        }
    }
}
