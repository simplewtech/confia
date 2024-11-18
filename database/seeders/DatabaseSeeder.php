<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call(
            [
                EmpresasSeeder::class,
                UbicacionesSeeder::class,
                FamiliasSeeder::class,
                TipoPersonasSeeder::class,
                TipoMovimientosSeeder::class,
                PersonasSeeder::class,
                ProductosSeeder::class,
                MovimientosSeeder::class,
                MovimientosDetallesSeeder::class,
                InventariosSeeder::class,


            ]
        );
    }
}
