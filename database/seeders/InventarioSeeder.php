<?php

namespace Database\Seeders;

use App\Models\Inventario;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas =  [
            [
            'id'=> '1',
            'producto_id'=> '1',
            'saldo' => '50',
            ]
        ];

        foreach ($datas as $data) {
            Inventario::create($data);
        }
    }
}
