<?php

namespace Database\Seeders;

use App\Models\Familia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FamiliaSeeder extends Seeder
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
            Familia::create($data);
        }
    }
}
