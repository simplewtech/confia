<?php

namespace Database\Seeders;

use App\Models\Ubicacion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UbicacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'id' => 1,
                'nombre' => 'Ala Tecnología'
            ],
            [
                'id' => 2,
                'nombre' => 'Ala Farmacia'
            ],
            [
                'id' => 3,
                'nombre' => 'Ala Bebés'
            ]
        ];

        foreach ($datas as $data) {
            Ubicacion::create($data);
        }
    }
}
