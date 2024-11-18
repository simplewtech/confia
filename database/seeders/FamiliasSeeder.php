<?php

namespace Database\Seeders;

use App\Models\Familias;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FamiliasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'id' => 1,
                'nombre' => 'Tecnología'
            ],
            [
                'id' => 2,
                'nombre' => 'Medicina'
            ],
            [
                'id' => 3,
                'nombre' => 'Bebés'
            ],
            [
                'id' => 4,
                'nombre' => 'Cocina'
            ],
            [
                'id' => 5,
                'nombre' => 'Aseo'
            ],
            [
                'id' => 6,
                'nombre' => 'Fríos'
            ]
        ];

        foreach ($datas as $data) {
            Familias::create($data);
        }
    }
}
