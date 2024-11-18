<?php

namespace Database\Seeders;

use App\Models\Personas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas =  [
            ['id'=> '1',
            'tipo_personas_id'=> 1,
            'nombre' => 'Jacobo',
            'apellido' => 'Bernal',
            'documento' => '1091886674',
            'celular' => '3209464754',
            'email' => 'jba901@hotmail.com',
            'password' => 'pass123'
            ]
        ];

        foreach ($datas as $data) {
            Personas::create($data);
        }
    }
}
