<?php

namespace Database\Seeders;

use App\Models\TipoMovimiento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TipoMovimientoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas =  [
            [
            'id'=> '1',
            'nombre' => 'ventas',
            'suma'=> 0
            ]

            ];

            foreach ($datas as $data) {
                TipoMovimiento::create($data);
            }
    }
}
