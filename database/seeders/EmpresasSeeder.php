<?php

namespace Database\Seeders;

use App\Models\Empresas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmpresasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'id' => 1,
                'nombre' => 'Apple',
                'nit' => '115181581',
                'regimen' => 'común',
                'representante_legal' => 'Steve Jobs',
                'documento_representante_legal' => '84569877',
                'direccion' => 'California',
                'telefono' => '754658789',

            ]
        ];

        foreach ($datas as $data) {
            Empresas::create($data);
        }
    }
}
