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
                EmpresaSeeder::class,
                UbicacionSeeder::class,
                FamiliaSeeder::class,
                ProductoSeeder::class,
                TipoPersonaSeeder::class,
                TipoMovimientoSeeder::class,
                PersonaSeeder::class,
                MovimientoSeeder::class,
                InventarioSeeder::class,
                MovimientoDetalleSeeder::class,
            ]
        );
    }
}
