<?php

namespace Database\Seeders;

use App\Models\Persona;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas =  [
            ['id'=> '1',
            'tipo_persona_id'=> 1,
            'nombre' => 'Jacobo',
            'apellido' => 'Bernal',
            'documento' => '1091886674',
            'celular' => '3209464754',
            'email' => 'jba901@hotmail.com',
            'password' => 'pass123'
            ]
        ];

        foreach ($datas as $data) {
            Persona::create($data);
        }
    }
}
