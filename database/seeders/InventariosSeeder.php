<?php

namespace Database\Seeders;

use App\Models\Inventarios;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InventariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas =  [
            [
            'id'=> '1',
            'productos_id'=> '1',
            'saldo' => '50',
            ]
        ];

        foreach ($datas as $data) {
            Inventarios::create($data);
        }
    }
}
