<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
            'id'=>1,
            'familia_id'=> 1,
            'ubicacion_id'=> 1,
            'nombre'=>'Macbook Pro',
            'codigo'=> 1001,
            'valor_venta'=>5000000,
            'valor_compra'=>4500000,
            'iva'=> '1'
            ],
            [
            'id'=>2,
            'familia_id'=> 1,
            'ubicacion_id'=> 1,
            'nombre'=>'Iphone 16 Pro Max',
            'codigo'=> 4544,
            'valor_venta'=>5000000,
            'valor_compra'=>4500000,
            'iva'=> '1'
            ],
            [
            'id'=>3,
            'familia_id'=> 1,
            'ubicacion_id'=> 1,
            'nombre'=>'Ipad Pro',
            'codigo'=> 8525,
            'valor_venta'=>900000,
            'valor_compra'=>50000,
            'iva'=> '1'
            ],
            [
            'id'=>4,
            'familia_id'=> 1,
            'ubicacion_id'=> 1,
            'nombre'=>'Asus Rog phone 6 carisimo',
            'codigo'=> 2123,
            'valor_venta'=>4500000,
            'valor_compra'=>320000,
            'iva'=> '1'
            ],
            [
            'id'=>5,
            'familia_id'=> 1,
            'ubicacion_id'=> 1,
            'nombre'=>'Hp pavilion',
            'codigo'=> 1001,
            'valor_venta'=>1000000,
            'valor_compra'=>4500000,
            'iva'=> '1'
            ],
            [
            'id'=>6,
            'familia_id'=> 1,
            'ubicacion_id'=> 1,
            'nombre'=>'Teclado Mecánico Corsair Pro',
            'codigo'=> 1001,
            'valor_venta'=>350000,
            'valor_compra'=>300000,
            'iva'=> '1'
            ]
        ];

        foreach ($datas as $data) {
            Producto::create($data);
        }
    }
}
